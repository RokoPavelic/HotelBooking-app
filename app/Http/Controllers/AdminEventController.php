<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminEventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::all();
        return view('pages.admin.event.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.event.create');
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
            'name'     => 'required',
            'description'    => 'required',
        ]);


        $data = new Event;
        $data->booking_id = $request->booking_id;
        $data->room_id = $request->room_id;
        $data->event_name = $request->event_name;
        $data->event_date = $request->event_date;
        $data->event_start = $request->event_start;
        $data->event_end = $request->event_end;
        $data->event_description = $request->event_description;
        $data->save();

        // foreach ($request->imgs as $room_id => $room_images)
        // {
        //     foreach ($room_images as $room_image)
        //     {
        //         $image= Image::create($room_image);
        //         $image->rooms()->attach($room_id);
        //     };

        // }

        return redirect('admin/events/create')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Event::find($id);
        return view('pages.admin.event.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $data = Event::find($id);
        return view('pages.admin.event.edit', ['data' => $data]);
        return redirect('admin/events/' . $id . '/edit')->with('success', 'Data has been updated.');
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
        $data = Event::find($id);
        $data->booking_id = $request->booking_id;
        $data->room_id = $request->room_id;
        $data->event_name = $request->event_name;
        $data->event_date = $request->event_date;
        $data->event_start = $request->event_start;
        $data->event_end = $request->event_end;
        $data->event_description = $request->event_description;
        $data->save();

        return redirect('admin/events/' . $id . '/edit')->with('success', 'Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::where('id', $id)->delete();

        return redirect('admin/events')->with('success', 'Data has been deleted.');
    }
}
