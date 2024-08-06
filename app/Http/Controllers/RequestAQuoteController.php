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
        // dd($request->all());

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'vehicle_type' => 'required',
        //     'city_of_departure' => 'required',
        //     'departure_time' => 'required',
        //     'type_of_goods' => 'required',
        //     'weight_of_shipment' => 'required|numeric',
        //     'delivery_type' => 'required',
        //     'date_of_shipment' => 'required|date',
        //     'route_type' => 'required',
        //     'stateroute' => 'required',
        // ]);

        // $amount_per_kg = 900;
        // $mileage_rate = 0.50;
        // $mileage = $this->calculateMileage($request->city_of_departure, $request->stateroute);

        // $total_cost = ($request->weight_of_shipment * $amount_per_kg) + ($mileage * $mileage_rate);

        // $requestQuote = RequestAQuote::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'vehicle_type' => $request->vehicle_type,
        //     'city_of_departure' => $request->city_of_departure,
        //     'departure_time' => $request->departure_time,
        //     'type_of_goods' => $request->type_of_goods,
        //     'weight_of_shipment' => $request->weight_of_shipment,
        //     'delivery_type' => $request->delivery_type,
        //     'tracking_number' => $this->generateTrackingNumber(),
        //     'date_of_shipment' => $request->date_of_shipment,
        //     'route_type' => $request->route_type,
        //     'stateroute' => $request->stateroute,
        //     'total_cost' => $total_cost,
        // ]);

        // // Send email to admin
        // Mail::to('support@avologistics.org')->send(new AdminQuoteRequest($requestQuote));

        // // Send email to user
        // Mail::to($request->email)->send(new UserQuoteRequest($requestQuote));

        // return response()->json(['success' => 'Quote request submitted successfully!', 'data' => $requestQuote], 200);
        return response()->json(['success' => 'Quote request submitted successfully!', 'data' => 'welcome'], 200);
    }

    private function generateTrackingNumber()
    {
        return 'TRACK' . strtoupper(uniqid());
    }

    private function calculateMileage($city_of_departure, $stateroute)
    {
        $mileageData = [
            'Abia' => [
                'PH' => 60,
                'Calabar' => 150,
                'Uyo' => 100,
                'Imo' => 50,
                'Enugu' => 120,
                'Awka' => 80,
                'Delta' => 200,
                'Ebonyi' => 140,
                'Kogi' => 180,
                'Abuja' => 400
            ],
            'Abuja' => [
                'Kaduna' => 200,
                'Kano' => 400,
                'Jigawa' => 450,
                'Gombe' => 500,
                'Bauchi' => 450,
                'Jos' => 300,
                'Nasarawa' => 250,
                'Benue' => 300
            ],
        ];

        if (isset($mileageData[$city_of_departure]) && isset($mileageData[$city_of_departure][$stateroute])) {
            return $mileageData[$city_of_departure][$stateroute];
        } else {
            return 100;
        }
    }
}
