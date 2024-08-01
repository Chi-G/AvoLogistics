<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestAQuote;

class TrackAndTraceController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shipment_type' => 'required|string|max:255',
            'tracking_numbers' => 'required|string',
            'delivery_type' => 'required|string|max:255',
        ]);

        $trackingNumber = $validatedData['tracking_numbers'];
        $quote = RequestAQuote::where('tracking_number', $trackingNumber)->first();

        if ($quote) {
            return redirect()->back()->with('success', 'Tracking information found: ' . $quote->tracking_number);
        } else {
            return redirect()->back()->with('error', 'No tracking information found for the provided tracking number.');
        }
    }
}

