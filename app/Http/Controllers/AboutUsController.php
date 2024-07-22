<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        // $aboutus = AboutUs::all();
        // return view('aboutus', compact('aboutus'));
        return view('aboutus');
    }
}
