<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'organizer' => ['required'],
            'street' => ['nullable'],
            'street_number' => ['nullable'],
            'zip' => ['nullable'],
            'town' => ['nullable'],
            'location_note' => ['nullable'],
        ]);

        return Event::create($request->validated());
    }

    public function show(Event $event)
    {
        return $event;
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => ['required'],
            'organizer' => ['required'],
            'street' => ['nullable'],
            'street_number' => ['nullable'],
            'zip' => ['nullable'],
            'town' => ['nullable'],
            'location_note' => ['nullable'],
        ]);

        $event->update($request->validated());

        return $event;
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return response()->json();
    }
}
