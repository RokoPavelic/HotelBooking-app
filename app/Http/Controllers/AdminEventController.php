<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminEventController extends Controller
{
    function list()
    {
        $events = Event::orderBy('event_date')->get();
        return view('pages.admin.adminevents', compact('events'));
    }
}
