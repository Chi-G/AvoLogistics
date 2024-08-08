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
            return response()->json([
                'success' => true,
                'tracking_number' => $quote->tracking_number,
                'name' => $quote->name,
                'date_of_shipment' => $quote->created_at->format('d M Y')
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No tracking information found for the provided tracking number.'
            ]);
        }
    }
}

