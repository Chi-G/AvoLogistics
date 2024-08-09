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
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'vehicle_type' => 'required',
                'departure_time' => 'required',
                'type_of_goods' => 'required',
                'weight_of_shipment' => 'required|numeric',
                'delivery_type' => 'required',
                'date_of_shipment' => 'required|date',
                'route_type' => 'required',
                'stateroute' => 'required',
            ]);

            // Extract origin and destination from stateroute
            list($origin, $destination) = explode('_to_', $request->stateroute);
            $origin = str_replace('_', ' ', $origin);
            $destination = str_replace('_', ' ', $destination);

            // Calculate mileage
            $mileage = $this->calculateMileage($origin, $destination);
            $amount_per_kg = 900;
            $mileage_rate = 200;
            $total_cost = ($request->weight_of_shipment * $amount_per_kg) + ($mileage * $mileage_rate);

            $requestQuote = RequestAQuote::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'vehicle_type' => $request->vehicle_type,
                'departure_time' => $request->departure_time,
                'type_of_goods' => $request->type_of_goods,
                'weight_of_shipment' => $request->weight_of_shipment,
                'delivery_type' => $request->delivery_type,
                'tracking_number' => $this->generateTrackingNumber(),
                'date_of_shipment' => $request->date_of_shipment,
                'route_type' => $request->route_type,
                'stateroute' => $request->stateroute,
                'total_cost' => $total_cost,
            ]);

            // Send email to admin
            // Mail::to('support@avologistics.org')->send(new AdminQuoteRequest($requestQuote));

            // Send email to user
            // Mail::to($request->email)->send(new UserQuoteRequest($requestQuote));

            if ($requestQuote) {
                return response()->json([
                    'success' => true,
                    'name' => $requestQuote->name,
                    'email' => $requestQuote->email,
                    'phone' => $requestQuote->phone,
                    'vehicle_type' => $requestQuote->vehicle_type,
                    'departure_time' => $requestQuote->departure_time,
                    'type_of_goods' => $requestQuote->type_of_goods,
                    'weight_of_shipment' => $requestQuote->weight_of_shipment,
                    'delivery_type' => $requestQuote->delivery_type,
                    'tracking_number' => $requestQuote->tracking_number,
                    'date_of_shipment' => $requestQuote->created_at->format('d M Y'),
                    'route_type' => $requestQuote->route_type,
                    'stateroute' => $requestQuote->stateroute,
                    'total_cost' => $requestQuote->total_cost,
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'There was an error submitting your request. Please try again...'
                ]);
            }
    }

    private function generateTrackingNumber()
    {
        return 'TRACK' . strtoupper(uniqid());
    }

    private function calculateMileage($origin, $destination)
    {
        $mileageData = [
            'Abia' => [
                'Porthacourt' => 60,
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

        if (isset($mileageData[$origin][$destination])) {
            return $mileageData[$origin][$destination];
        } else {
            // Default mileage if no direct route is found
            return 100;
        }
    }
}

