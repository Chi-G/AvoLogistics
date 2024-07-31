<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestAQuote;

class RequestAQuoteController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
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

        RequestAQuote::create($request->all());

        return redirect()->back()->with('success', 'Quote request submitted successfully.');
    }
}
