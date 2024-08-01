<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestAQuote;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminQuoteRequest;
use App\Mail\UserQuoteRequest;

class RequestAQuoteController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
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
            'date_of_shipment' => 'required|date',
        ]);

        $quote = RequestAQuote::create($validatedData);

        // Generate tracking number
        $trackingNumber = 'TRK' . time() . rand(1000, 9999);
        $quote->tracking_number = $trackingNumber;
        $quote->save();

        // Send email to admin
        Mail::to('support@avologistics.org')->send(new AdminQuoteRequest($quote));

        // Send email to user
        Mail::to($quote->email)->send(new UserQuoteRequest($quote));

        return redirect()->back()->with('success', 'Quote request submitted successfully. Your tracking number is ' . $trackingNumber);
    }
}
