<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class EventsController extends Controller
{
    public function index(Request  $request)
    {
        //call apis
        $events = Http::get("https://kontests.net/api/v1/all");

        // return json_decode($events);

        return view("events", [
            "events"=> json_decode($events)

        ]);
    }
}
