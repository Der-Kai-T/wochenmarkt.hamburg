<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index()
    {
        return Organizer::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'street' => ['nullable'],
            'street_number' => ['nullable'],
            'zip' => ['nullable'],
            'town' => ['nullable'],
            'phone' => ['nullable'],
            'email' => ['nullable', 'email', 'max:254'],
            'web' => ['nullable'],
        ]);

        return Organizer::create($request->validated());
    }

    public function show(Organizer $organizer)
    {
        return $organizer;
    }

    public function update(Request $request, Organizer $organizer)
    {
        $request->validate([
            'name' => ['required'],
            'street' => ['nullable'],
            'street_number' => ['nullable'],
            'zip' => ['nullable'],
            'town' => ['nullable'],
            'phone' => ['nullable'],
            'email' => ['nullable', 'email', 'max:254'],
            'web' => ['nullable'],
        ]);

        $organizer->update($request->validated());

        return $organizer;
    }

    public function destroy(Organizer $organizer)
    {
        $organizer->delete();

        return response()->json();
    }
}
