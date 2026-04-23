<?php

namespace App\Http\Controllers;

use App\Models\ExpertQuery;
use App\Rules\RecaptchaRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ExpertQueryController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'query' => 'required|string',
                'g-recaptcha-response' => ['required', 'string', new RecaptchaRule('expert_query')]
            ]);

            // Create the expert query
            ExpertQuery::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'subject' => $validated['subject'],
                'query' => $validated['query']
            ]);

            // Send emails
            try {
                // Send greeting email to customer
                Mail::to($validated['email'])->send(new \App\Mail\ExpertQueryGreeting($validated));

                // Send notification email to admin
                $adminEmail = env('ADMIN_EMAIL', 'contact@360propertieshub.com');
                Mail::to($adminEmail)->send(new \App\Mail\ExpertQueryAdmin($validated));
            } catch (\Exception $mailException) {
                Log::error('Expert Query Email Error: ' . $mailException->getMessage());
                // Continue execution even if email fails
            }

            return response()->json([
                'success' => true,
                'message' => 'Your expert query has been submitted successfully! Our property expert will contact you within 2-4 hours.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields correctly.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Expert Query Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    public function index()
    {
        $queries = ExpertQuery::latest()->paginate(20);
        return view('admin.expert-queries', compact('queries'));
    }
}
