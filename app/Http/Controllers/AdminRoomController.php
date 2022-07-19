<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Image;

class AdminRoomController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Room::all();
        return view('pages.admin.room.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'description'    => 'required',
        ]);

        
        $data = new Room;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->size = $request->size;
        $data->capacity = $request->capacity;
        $data->amenities = $request->amenities;
        $data->facilities = $request->facilities;
        $data->price_low = $request->price_low;
        $data->price_medium = $request->price_medium;
        $data->price_high= $request->price_high;
        $data->save();

        foreach ($request->imgs as $room_id => $room_images)
        {
            foreach ($room_images as $room_image)
            {
                $image= Image::create($room_image);
                $image->rooms()->attach($room_id);
            };

        }

        return redirect('admin/rooms/create')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Room::find($id);
        return view('pages.admin.room.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $data = Room::find($id);
        return view('pages.admin.room.edit',['data' => $data]);
        return redirect('admin/rooms/' . $id . '/edit')->with('success', 'Data has been updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Room::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->size = $request->size;
        $data->capacity = $request->capacity;
        $data->amenities = $request->amenities;
        $data->facilities = $request->facilities;
        $data->price_low = $request->price_low;
        $data->price_medium = $request->price_medium;
        $data->price_high= $request->price_high;
        $data->save();

        return redirect('admin/rooms/' . $id . '/edit')->with('success', 'Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::where('id', $id)->delete();

        return redirect('admin/rooms')->with('success', 'Data has been deleted.');
    }
}
