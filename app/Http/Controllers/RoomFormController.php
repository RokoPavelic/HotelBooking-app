<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\ContactInfo;
use App\Models\Room;


class RoomFormController extends Controller
{
    public function RoomForm(Request $request) {
    //    dd($request);
    // $room_id = $request[1];
    // dd($room_id);
        // Form validation
        $this->validate($request, [
            'name'                => 'required',
            'lastname'            => 'required',
            'email'               => 'required|email',
            'phone'               => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'date_in'             => 'required',
            'date_out'            => 'required',
         ]
        );
        
        
        $contact_infos = ContactInfo::create([
            'name'          =>$request->name,
            'lastname'      =>$request->lastname,
            'email'         =>$request->email,
            'phone_number'  =>$request->phone,
        ]);
        
        $booking = Booking::create([
            'room_id'           =>$request->room_id,
            'contact_info_id'   =>$contact_infos->id,
            'date_in'           =>$request->date_in,
            'date_out'          =>$request->date_out,
            'role_description'  =>$request->role_description,
        ]);

     
       

        //  Store data in database
    
        return [
            'success' => true
        ];
        
        // ->with('success', 'Your message was sent
        // Our staff will contact you shortly');
    }
}
