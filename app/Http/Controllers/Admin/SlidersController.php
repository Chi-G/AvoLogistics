<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SlidersController extends Controller
{
    public function index()
    {
        $sliders = Sliders::all();
        return view('admin.sliders.slider_index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.slider_create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new slider instance
        $slider = new Sliders();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slider_images', 'public');
            $slider->image = $imagePath;
        }

        // Save the slider
        $slider->save();

        // to record the logger for dashboard
        ActivityLogger::log('task', 'Slider Created', 'A new slider was created: ' . $request->title);

        // Redirect to the sliders index page with a success message
        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
    }

    public function show(Sliders $slider)
    {
        $sliders = Sliders::all();
        return view('admin.sliders.slider_show', compact('sliders'));
    }

    public function edit(Sliders $slider)
    {
        return view('admin.sliders.slider_edit', compact('slider'));
    }

    public function update(Request $request, Sliders $slider)
    {
        // Validate the request data
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string', 
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the title if provided
        if ($request->has('title')) {
            $slider->title = $request->input('title');
        }

        // Update the description if provided
        if ($request->has('description')) {
            $slider->description = $request->input('description');
        }

        // Handle the image upload if provided
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($slider->image) {
                Storage::disk('public')->delete($slider->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('slider_images', 'public');
            $slider->image = $imagePath;
        }

        // Save the updated slider
        $slider->save();

        // Redirect to the sliders index page with a success message
        return redirect()->route('admin.sliders.index')->with('info', 'Slider updated successfully.');
    }

    public function destroy(Sliders $slider)
    {
        // Delete the slider
        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }
        $slider->delete();

        // Redirect to the sliders index page with a success message
        return redirect()->route('admin.sliders.index')->with('error', 'Slider deleted successfully.');
    }
}
