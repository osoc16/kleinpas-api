<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class EventsController extends Controller
{
    public function getEvents()
    {
        $events = DB::table('events')->get();
        return json_encode($events);
    }

    public function getEventById($id)
    {
        $events = DB::table('events')
            ->where('id', $id)
            ->get();
        return json_encode($events);
    }
}
