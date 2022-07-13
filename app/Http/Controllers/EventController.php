<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get();

        if ($events == []) {
            return "there are no events";
        } else {
           return $events;
        }

        
    }

    
}
