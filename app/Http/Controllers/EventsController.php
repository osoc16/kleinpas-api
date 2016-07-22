<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\KPEvent;
use DB;

class EventsController extends Controller
{
    // Get all events
    public function getEvents()
    {
        $events = DB::table('events')->get();
        return json_encode($events);
    }

    // Get a event with ID
    public function getEventById($id)
    {
        $events = DB::table('events')
            ->where('id', $id)
            ->get();
        return json_encode($events);
    }

    // Add an event to the database
    public function addEvent(Request $input)
    {
        try
        {
            $event = new KPEvent();
            $event->phonenumber = $input['phonenumber'];
            $event->email = $input['email'];
            $event->date = $input['date'];
            $event->start = $input['start'];
            $event->end = $input['end'];
            $event->save();
            return new Response(json_encode($event), 201);

        }
        catch (Exception $ex)
        {
            return new Response('We are not able to create a new event.', 500);
        }
    }
}
