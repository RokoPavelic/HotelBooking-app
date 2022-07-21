<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms =Room::with('images')->get();
        
        return $rooms;
    }

    public function events()
    {
        
        $events =Room::where('event')->get();

        return $events;
    }


    
}
