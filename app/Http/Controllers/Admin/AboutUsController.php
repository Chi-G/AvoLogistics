<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = AboutUs::all();
        return view('admin.about_us.aboutus_index', compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about_us.aboutus_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutUsRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('aboutus_images');
        }

        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('aboutus_images');
        }

        AboutUs::create($data);

        return redirect()->route('admin.about_us.aboutus_index')->with('success', 'About Us created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutu)
    {
        return view('admin.about_us.aboutus_edit', compact('aboutu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aboutus_title1' => 'required|string|max:255',
            'aboutus_desc1' => 'required|string',
            'mission_desc' => 'required|string',
            'vision_desc' => 'required|string',
            'goal_desc' => 'required|string',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aboutus_title2' => 'required|string|max:255',
            'aboutus_desc2' => 'required|string',
        ]);

        $aboutus = AboutUs::find($id);

        if ($request->hasFile('image1')) {
            Storage::delete($aboutus->image1);
            $aboutus->image1 = $request->file('image1')->store('aboutus');
        }

        if ($request->hasFile('image2')) {
            Storage::delete($aboutus->image2);
            $aboutus->image2 = $request->file('image2')->store('aboutus');
        }

        $aboutus->aboutus_title1 = $request->aboutus_title1;
        $aboutus->aboutus_desc1 = $request->aboutus_desc1;
        $aboutus->mission_desc = $request->mission_desc;
        $aboutus->vision_desc = $request->vision_desc;
        $aboutus->goal_desc = $request->goal_desc;
        $aboutus->aboutus_title2 = $request->aboutus_title2;
        $aboutus->aboutus_desc2 = $request->aboutus_desc2;

        $aboutus->save();

        return redirect()->route('admin.aboutus.index')->with('success', 'About Us updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        if ($aboutUs->image1) {
            Storage::delete($aboutUs->image1);
        }

        if ($aboutUs->image2) {
            Storage::delete($aboutUs->image2);
        }

        $aboutUs->delete();

        return redirect()->route('admin.about_us.aboutus_index')->with('success', 'About Us deleted successfully.');
    }
}
