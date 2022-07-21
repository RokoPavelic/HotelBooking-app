@extends('layouts.indexAdmin')  

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Events
                <a href="{{url('admin/events')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
           
                    <table class="table table-bordered">
                        <tr>
                            <th>Event ID</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Event Name</th>
                            <td>{{$data->event_name}}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$data->event_date}}</td>
                        </tr>
                        <tr>
                            <th>Start</th>
                            <td>{{$data->event_start}}</td>
                        </tr>
                        <tr>
                            <th>End</th>
                            <td>{{$data->event_end}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$data->event_description}}</td>
                        </tr>
                       
                    </table>
            
            </div>
        </div>
    </div>

</div>


@endsection