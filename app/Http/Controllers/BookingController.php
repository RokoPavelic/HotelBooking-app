<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Booking;
class BookingController extends Controller
{
    public function index()
    {
        $rooms =Booking::get();

        return $rooms;
    }

    public function store(Event $event)
    {
        

        $event->bookings()->create([
            'guest_id'          => request()->guest()->id,
            'event_name'        => request('event_name'),
            'event_start'       => request('event_start'),
            'event_end'         => request('event_end'),
            'event_description' => request('event_description'),
        ]);

        return back();
    }
}
