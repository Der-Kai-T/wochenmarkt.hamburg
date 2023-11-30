<?php

namespace App\Http\Controllers;

use App\Models\EventOrganizer;
use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function index()
    {
        return EventOrganizer::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => ['required'],
            'organizer_id' => ['required'],
        ]);

        return EventOrganizer::create($request->validated());
    }

    public function show(EventOrganizer $eventOrganizer)
    {
        return $eventOrganizer;
    }

    public function update(Request $request, EventOrganizer $eventOrganizer)
    {
        $request->validate([
            'event_id' => ['required'],
            'organizer_id' => ['required'],
        ]);

        $eventOrganizer->update($request->validated());

        return $eventOrganizer;
    }

    public function destroy(EventOrganizer $eventOrganizer)
    {
        $eventOrganizer->delete();

        return response()->json();
    }
}
