<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ContactInfo;
use App\Models\Event;
use App\Models\Booking;

class EventFormController extends Controller
{
    public function EventForm(Request $request) {
        // dd($request);
        // Form validation
        // return ['message' => 'controller reached'];

        $this->validate($request, [
            'name'                => 'required',
            'lastname'            => 'required',
            'email'               => 'required|email',
            'phone'               => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'event_name'          => 'required',
            'date_in'             => 'required',
            'event_description'   => 'required',
         ]
        );

        $events = Booking::where('room_id', '=', $request->room_id )
                         ->whereDate('date_in', '<=', $request->date_out)
                         ->whereDate('date_out', '>=', $request->date_in)
                         ->get();

        if ($events->count()) {
        return response()->json(["message"=>"Date is already booked.","errors"=>["phone"=>["Date is already booked"]]], 422);
         }
        // $a_events=DB::SELECT("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM bookings WHERE '$date_in' BETWEEN checking_date AND checkout_date)");

    
        $contact_infos = ContactInfo::create([
            'name'                =>$request->name,
            'lastname'            =>$request->lastname,
            'email'               =>$request->email,
            'phone_number'        =>$request->phone,
        ]);
    
        $booking = Booking::create([
            'contact_info_id'     =>$contact_infos->id,   
            'room_id'             =>$request->room_id,
            'date_in'             =>$request->date_in,
            'date_out'            =>!$request->date_out ? $request->date_in : $request->date_out,
            'booked'              =>true,
        ]);
        
        $event = Event::create([
            'room_id'             =>$request->room_id,
            'event_name'          =>$request->event_name,
            'event_date'          =>$request->date_in,
            'event_start'         =>$request->date_in,
            'event_end'           =>!$request->date_out ? $request->date_in : $request->date_out,
            'event_description'   =>$request->event_description,
            'booking_id'          =>$booking->id,
        ]);


        //  Store data in database
    
        return [
            'success' => true
        ];
        
        // ->with('success', 'Your message was sent
        // Our staff will contact you shortly');
    }

}
