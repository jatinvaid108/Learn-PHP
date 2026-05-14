<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allEvents()
    {
        $events = Event::with('user')->get();

        return response()->json([
            'events' => $events
        ]);
    }

    public function deleteEvent($id)
    {
        $event = Event::find($id);

        if (!$event) {

            return response()->json([
                'message' => 'Event not found'
            ], 404);
        }

        $event->delete();

        return response()->json([
            'message' => 'Event deleted by admin'
        ]);
    }
}
