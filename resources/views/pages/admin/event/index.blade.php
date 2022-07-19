@extends('layouts.indexAdmin')

{{-- @section('styleLink')
 
<link rel="stylesheet" href={{ mix("css/admin-events.css") }}>
 
@endsection --}}

{{-- <title>{{$title}} </title> --}}

 {{-- @include('components/adminNav')  --}}



@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
  

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Events
              <a href="{{url('admin/roomtype/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
          </h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <div class="events-table">
            <thead>
              <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Start</th>
                <th>End</th>
                <th>Desription</th>
              </tr>
            </thead>
            <tbody>
                @if($data)
                            @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->event_name }}</td>
                                    <td>{{ $d->event_date }}</td>
                                    <td>{{ $d->event_start }}</td>
                                    <td>{{ $d->event_end }}</td>
                                    <td>{{ $d->event_description }}</td>
                                    
                                    <td>
                                        <a href="{{url('admin/events/' . $d->id )}}" class="button-show"><button>Show</button></a>
                                        <a href="{{url('admin/events/' . $d->id . '/edit')}}" class="button-edit"><button>Edit</button></a>
                                        <a onclick="return confirm('Are you sure that you want to delete this data?')"href="{{url('admin/events/' . $d->id . '/delete' )}}" class="button-delete"><button>Delete</button></a>
                                        </td>
                                </tr>

                            @endforeach
                       @endif
            </tbody>
        </table>
    </div>

</main>

@endsection