<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('admin.services.service_index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.service_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_title1' => 'required|string',
            'service_title2' => 'required|string',
            'service_title3' => 'required|string',
            'service_title4' => 'required|string',
            'service_desc1' => 'required|string',
            'service_desc2' => 'required|string',
            'service_desc3' => 'required|string',
            'service_desc4' => 'required|string',
            'offer_bg_title' => 'required|string',
            'offer_title1' => 'required|string',
            'offer_title2' => 'required|string',
            'offer_title3' => 'required|string',
            'offer_desc1' => 'required|string',
            'offer_desc2' => 'required|string',
            'offer_desc3' => 'required|string',
            'service_details_title' => 'required|string',
            'service_details_bg_desc' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Services::create([
            'service_title1' => $request->service_title1,
            'service_title2' => $request->service_title2,
            'service_title3' => $request->service_title3,
            'service_title4' => $request->service_title4,
            'service_desc1' => $request->service_desc1,
            'service_desc2' => $request->service_desc2,
            'service_desc3' => $request->service_desc3,
            'service_desc4' => $request->service_desc4,
            'offer_bg_title' => $request->offer_bg_title,
            'offer_title1' => $request->offer_title1,
            'offer_title2' => $request->offer_title2,
            'offer_title3' => $request->offer_title3,
            'offer_desc1' => $request->offer_desc1,
            'offer_desc2' => $request->offer_desc2,
            'offer_desc3' => $request->offer_desc3,
            'service_details_title' => $request->service_details_title,
            'service_details_bg_desc' => $request->service_details_bg_desc,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.services.service_edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_title1' => 'required|string',
            'service_title2' => 'required|string',
            'service_title3' => 'required|string',
            'service_title4' => 'required|string',
            'service_desc1' => 'required|string',
            'service_desc2' => 'required|string',
            'service_desc3' => 'required|string',
            'service_desc4' => 'required|string',
            'offer_bg_title' => 'required|string',
            'offer_title1' => 'required|string',
            'offer_title2' => 'required|string',
            'offer_title3' => 'required|string',
            'offer_desc1' => 'required|string',
            'offer_desc2' => 'required|string',
            'offer_desc3' => 'required|string',
            'service_details_title' => 'required|string',
            'service_details_bg_desc' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $service = Services::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $service->image = $imagePath;
        }

        $service->update([
            'service_title1' => $request->service_title1,
            'service_title2' => $request->service_title2,
            'service_title3' => $request->service_title3,
            'service_title4' => $request->service_title4,
            'service_desc1' => $request->service_desc1,
            'service_desc2' => $request->service_desc2,
            'service_desc3' => $request->service_desc3,
            'service_desc4' => $request->service_desc4,
            'offer_bg_title' => $request->offer_bg_title,
            'offer_title1' => $request->offer_title1,
            'offer_title2' => $request->offer_title2,
            'offer_title3' => $request->offer_title3,
            'offer_desc1' => $request->offer_desc1,
            'offer_desc2' => $request->offer_desc2,
            'offer_desc3' => $request->offer_desc3,
            'service_details_title' => $request->service_details_title,
            'service_details_bg_desc' => $request->service_details_bg_desc,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
