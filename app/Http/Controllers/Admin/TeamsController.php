<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Teams::all();
        return view('admin.teams.team_index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.team_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'short_desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fb' => 'nullable|url',
            'linkedIn' => 'nullable|url',
            'twitter' => 'nullable|url',
            'IG' => 'nullable|url',
        ]);

        $imagePath = $request->file('image')->store('teams', 'public');

        $team = new Teams();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->short_desc = $request->short_desc;
        $team->image = $imagePath;
        $team->fb = $request->fb;
        $team->linkedIn = $request->linkedIn;
        $team->twitter = $request->twitter;
        $team->IG = $request->IG;
        $team->save();

        return redirect()->route('admin.teams.index')->with('success', 'Team member created successfully.');
    }

    public function edit($id)
    {
        $team = Teams::find($id);
        return view('admin.teams.team_edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'short_desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fb' => 'nullable|url',
            'linkedIn' => 'nullable|url',
            'twitter' => 'nullable|url',
            'IG' => 'nullable|url',
        ]);

        $team = Teams::find($id);

        $team->name = $request->name;
        $team->position = $request->position;
        $team->short_desc = $request->short_desc;
        $team->fb = $request->fb;
        $team->linkedIn = $request->linkedIn;
        $team->twitter = $request->twitter;
        $team->IG = $request->IG;

        if ($request->hasFile('image')) {
            if ($team->image && $team->image != 'team_images/default.jpg') {
                Storage::disk('public')->delete($team->image);
            }
            $team->image = $request->file('image')->store('team_images', 'public');
        }
        
        $team->save();

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy($id)
    {
        $team = Teams::find($id);
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully.');
    }
}
