<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function send(Request $request)
    {
        // dd($request->all());

        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()], 422);
        }

        // Prepare details for email and database storage
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject, 
            'message' => $request->message,
        ];

        dd($request->all());

        try {
            // Send email
            // Mail::to('ictsupport@tcisng.org')->send(new ContactMail($details));

            // Save contact details to the database
            // Contact::create($details);

            // Return success response
            return response()->json(['message' => 'Your message has been sent successfully!'], 200);
        } catch (\Exception $e) {
            // Return error response for unexpected exceptions
            return response()->json(['errors' => [$e->getMessage()]], 500);
        }
    }
    

    // public function submit(ContactFormRequest $request)
    // {
    //     try {
    //         // Example database save operation
    //         // Contact::create($request->all());

    //         // Example log for debug
    //         Log::info('Contact form submitted successfully', $request->all());

    //         return response()->json(['message' => 'Contact form submitted successfully'], 200);
    //     } catch (\Exception $e) {
    //         // Log the error for debugging
    //         Log::error('Error submitting contact form: ' . $e->getMessage());

    //         return response()->json(['errors' => ['Internal Server Error']], 500);
    //     }
    // }
}
