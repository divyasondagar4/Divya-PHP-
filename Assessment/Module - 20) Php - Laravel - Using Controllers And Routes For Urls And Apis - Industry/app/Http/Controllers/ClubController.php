<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Club::create($request->all());
        return redirect()->route('clubs.index')->with('success', 'Club added successfully');
    }

    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $club->update($request->all());
        return redirect()->route('clubs.index')->with('success', 'Club updated successfully');
    }

    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->route('clubs.index')->with('success', 'Club deleted');
    }
}
