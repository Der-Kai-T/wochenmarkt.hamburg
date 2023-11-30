<?php

namespace App\Http\Controllers;

use App\Models\EventMessage;
use Illuminate\Http\Request;

class EventMessageController extends Controller
{
    public function index()
    {
        return EventMessage::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => ['required'],
            'message' => ['required'],
            'start' => ['required', 'date'],
            'end' => ['required', 'date'],
        ]);

        return EventMessage::create($request->validated());
    }

    public function show(EventMessage $eventMessage)
    {
        return $eventMessage;
    }

    public function update(Request $request, EventMessage $eventMessage)
    {
        $request->validate([
            'event_id' => ['required'],
            'message' => ['required'],
            'start' => ['required', 'date'],
            'end' => ['required', 'date'],
        ]);

        $eventMessage->update($request->validated());

        return $eventMessage;
    }

    public function destroy(EventMessage $eventMessage)
    {
        $eventMessage->delete();

        return response()->json();
    }
}
