<?php

namespace App\Http\Controllers;

use App\Models\EventInstance;
use Illuminate\Http\Request;

class EventInstanceController extends Controller
{
    public function index()
    {
        return EventInstance::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => ['required'],
            'day_of_week' => ['required', 'integer'],
            'start' => ['required', 'date'],
            'end' => ['required', 'date'],
            'price' => ['required'],
            'unit' => ['required'],
            'price_power' => ['required'],
        ]);

        return EventInstance::create($request->validated());
    }

    public function show(EventInstance $eventInstance)
    {
        return $eventInstance;
    }

    public function update(Request $request, EventInstance $eventInstance)
    {
        $request->validate([
            'event_id' => ['required'],
            'day_of_week' => ['required', 'integer'],
            'start' => ['required', 'date'],
            'end' => ['required', 'date'],
            'price' => ['required'],
            'unit' => ['required'],
            'price_power' => ['required'],
        ]);

        $eventInstance->update($request->validated());

        return $eventInstance;
    }

    public function destroy(EventInstance $eventInstance)
    {
        $eventInstance->delete();

        return response()->json();
    }
}
