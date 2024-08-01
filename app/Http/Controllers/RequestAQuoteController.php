<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestAQuote;
use Illuminate\Support\Facades\Mail;

class RequestAQuoteController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'vehicle_type' => 'required|string|max:255',
            'city_of_departure' => 'required|string|max:255',
            'departure_time' => 'required|string|max:255',
            'type_of_goods' => 'required|string|max:255',
            'weight_of_shipment' => 'required|numeric',
            'delivery_type' => 'required|string|max:255',
        ]);

        $quote = RequestAQuote::create($validatedData);

        // Generate tracking number
        $trackingNumber = 'TRK' . time() . rand(1000, 9999);
        $quote->tracking_number = $trackingNumber;
        $quote->save();

        // Send email to admin
        Mail::to('support@avologistics.com')->send(new \App\Mail\AdminQuoteRequestMail($quote));

        // Send email to user
        Mail::to($quote->email)->send(new \App\Mail\UserQuoteRequestMail($quote));

        return redirect()->back()->with('success', 'Quote request submitted successfully. Your tracking number is ' . $trackingNumber);
    }
}
