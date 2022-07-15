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
        
        $booking = Booking::create();
        
        $contact_infos = ContactInfo::create([
            'name'          =>$request->name,
            'lastname'      =>$request->lastname,
            'email'         =>$request->email,
            'phone_number'  =>$request->phone,
        ]);
        
        
        $message = Event::create([
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
