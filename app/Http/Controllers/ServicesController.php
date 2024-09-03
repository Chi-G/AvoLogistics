<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('services', compact('services'));
    }

    public function show(Services $service)
    {
        // Get the previous service post
        $previous = Services::where('id', '<', $service->id)->orderBy('id', 'desc')->first();

        // Get the next blog post
        $next = Services::where('id', '>', $service->id)->orderBy('id')->first();

        return view('services_details', compact('service', 'previous', 'next'));
    }
}
