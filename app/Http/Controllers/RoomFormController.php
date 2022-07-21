<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\ContactInfo;
use App\Models\Room;


class RoomFormController extends Controller
{
    public function RoomForm(Request $request) {
    
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


        $bookings = Booking::where('room_id', '=', $request->room_id )->whereDate('date_in', '<=', $request->date_out)
        ->whereDate('date_out', '>=', $request->date_in)->get();

        
        if ($bookings->count()) {
            return 'these dates are already taken';
        }

        
            
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
            'booked'            =>true,
        ]);

        // };

        //  Store data in database
    
        return [
            'success' => true
        ];

    }
}
