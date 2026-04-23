<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Mail\ContactInquiryGreeting;
use App\Mail\ContactInquiryAdmin;
use App\Rules\RecaptchaRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactInquiryController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'tel' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
                'message' => 'nullable|string',
                'page_url' => 'required|string',
                'g-recaptcha-response' => ['required', 'string', new RecaptchaRule('contact_form')]
            ]);

            $contactData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['tel'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
                'page_url' => $validated['page_url']
            ];

            ContactInquiry::create($contactData);

            // Send greeting email to user
            Mail::to($validated['email'])->send(new ContactInquiryGreeting($contactData));

            // Send notification email to admin
            $adminEmail = env('ADMIN_EMAIL', 'contact@360propertieshub.com');
            Mail::to($adminEmail)->send(new ContactInquiryAdmin($contactData));

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for your inquiry! We will get back to you soon.'
                ]);
            }

            return back()->with('success', 'Thank you for your inquiry! We will get back to you soon.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong. Please try again.'
                ], 500);
            }
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function expertSolution(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'query' => 'required|string',
                'g-recaptcha-response' => ['required', 'string', new RecaptchaRule('expert_solution')]
            ]);

            $contactData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'subject' => $validated['subject'],
                'message' => $validated['query'],
                'page_url' => $request->header('referer', url()->current())
            ];

            ContactInquiry::create($contactData);

            // Send greeting email to user
            Mail::to($validated['email'])->send(new ContactInquiryGreeting($contactData));

            // Send notification email to admin
            $adminEmail = env('ADMIN_EMAIL', 'contact@360propertieshub.com');
            Mail::to($adminEmail)->send(new ContactInquiryAdmin($contactData));

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you! Your query has been submitted successfully. Our expert will contact you within 24 hours.'
                ]);
            }

            return back()->with('success', 'Thank you! Your query has been submitted successfully. Our expert will contact you within 24 hours.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong. Please try again.'
                ], 500);
            }
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
