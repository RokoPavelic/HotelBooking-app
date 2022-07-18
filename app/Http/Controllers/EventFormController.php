<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactInfo;
use App\Models\Event;
use App\Models\Booking;

class EventFormController extends Controller
{
    public function EventForm(Request $request) {
        // dd($request);
        // Form validation
        
        $this->validate($request, [
            'name'                => 'required',
            'lastname'            => 'required',
            'email'               => 'required|email',
            'phone'               => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'event_name'          => 'required',
            'date'                => 'required',
            'event_description'   => 'required'
         ]
        );
        
    //    $events = Event::where('room_id', $request->room_id )->where('date', '=', $request->date)->get();

        $contact_infos = ContactInfo::create([
            'name'                =>$request->name,
            'lastname'            =>$request->lastname,
            'email'               =>$request->email,
            'phone_number'        =>$request->phone,
        ]);
       
        $booking = Booking::create([
            'contact_info_id'     =>$contact_infos->id,   
            'room_id'             =>$request->room_id,
            'date_in'             =>$request->date,
            'date_out'            =>$request->date,
            'booked'              =>true,
        ]);
        
        $event = Event::create([
            'room_id'             =>$request->room_id,
            'event_name'          =>$request->event_name,
            'event_date'          =>$request->date,
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
