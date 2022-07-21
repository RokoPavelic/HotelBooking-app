<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventsController extends Controller
{
<<<<<<< HEAD
=======
public function loadEvents(){
    $events = Event::all ();
    return response()-> json($events);
>>>>>>> e23659c504c6b314aaf0572c4042d3fe56beec54

    public function loadEvents(){
        $events = Events::all ();
        return response()-> json($events);

    }
}

// kk