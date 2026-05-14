<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::where('user_id', $request->user()->id)->get();

        return response()->json([
            'events' => $events
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255'
        ]);

        $validatedData['user_id'] = $request->user()->id;

        $event = Event::create($validatedData);

        return response()->json([
            'message' => 'Event created successfully',
            'event' => $event
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if (!$event) {

            return response()->json([
                'message' => 'Event not found'
            ], 404);
        }

        if ($event->user_id !== $request->user()->id) {

            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }

        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'event_date' => 'sometimes|date',
            'location' => 'sometimes|string|max:255'
        ]);

        $event->update($validatedData);

        return response()->json([
            'message' => 'Event updated successfully',
            'event' => $event
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $event = Event::find($id);

        if (!$event) {

            return response()->json([
                'message' => 'Event not found'
            ], 404);
        }

        if ($event->user_id !== $request->user()->id) {

            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }

        $event->delete();

        return response()->json([
            'message' => 'Event deleted successfully'
        ]);
    }
}
