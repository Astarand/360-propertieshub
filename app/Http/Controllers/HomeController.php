<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactGreeting;
use App\Mail\ContactAdminNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function Index()
    {
        return view('Pages.Index');
    }
    public function About()
    {
        return view('Pages.About');
    }
    public function Projects()
    {
        return view('Pages.Projects');
    }
    public function Approveal()
    {
        return view('Pages.Approvals-Noc');
    }
    public function Architecture()
    {
        return view('Pages.Architecher-Structural');
    }
    public function NRIService()
    {
        return view('Pages.NRI-Service');
    }
    public function Contact()
    {
        return view('Pages.Contact');
    }
    public function Properties()
    {
        return view('Pages.Properties');
    }
    public function ContactStore(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'tel' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
                'message' => 'nullable|string'
            ]);

            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->tel,
                'subject' => $request->subject,
                'message' => $request->message
            ]);

            // Send greeting email to customer
            try {
                Mail::to($request->email)->send(new ContactGreeting([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->tel,
                    'subject' => $request->subject,
                    'message' => $request->message
                ]));
            } catch (\Exception $mailException) {
                // Log email error but don't fail the contact submission
                Log::error('Failed to send greeting email: ' . $mailException->getMessage());
            }

            // Send notification email to admin
            try {
                Mail::to(env('ADMIN_EMAIL'))->send(new ContactAdminNotification([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->tel,
                    'subject' => $request->subject,
                    'message' => $request->message
                ]));
            } catch (\Exception $mailException) {
                // Log email error but don't fail the contact submission
                Log::error('Failed to send admin notification email: ' . $mailException->getMessage());
            }

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for contacting us! We will get back to you soon.'
                ]);
            }

            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please fill all required fields correctly.',
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
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
