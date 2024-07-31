<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrackAndTrace;

class TrackAndTraceController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'shipment_type' => 'required|string|max:255',
            'tracking_numbers' => 'required|string',
            'delivery_type' => 'required|string|max:255',
        ]);

        TrackAndTrace::create($request->all());

        return redirect()->back()->with('success', 'Tracking request submitted successfully.');
    }
}
