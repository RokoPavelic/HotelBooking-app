@extends('layouts.indexAdmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Event
                <a href="{{url('admin/events')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif

            @if(Session::has('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            <form method="POST" action="{{url('admin/events/' . $data->id )}}">
                @csrf
                @method('put')
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Event ID</th>
                            <td><input value="{{ $data->id }}"name="event-id" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Event Name</th>
                            <td><input value="{{ $data->event_name }}" name="event-name" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><textarea name="event-date" class="form-control">{{ $data->event_date }}</textarea></td>
                        </tr>
                        <tr>
                            <th>Start</th>
                            <td><textarea name="event-start" class="form-control">{{ $data->event_start }}</textarea></td>
                        </tr>
                        <tr>
                            <th>End</th>
                            <td><textarea name="event-end" class="form-control">{{ $data->event_end }}</textarea></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea name="event-description" class="form-control">{{ $data->event_description }}</textarea></td>
                        </tr>
                        {{-- <tr>
                            <th>Gallery</th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        @foreach($data->images as $img)
                                            <td class="imgcol{{$img->id}}">
                                                <img src="{{ asset( $img->src )}}" alt="{{$img->alt}}" width="100px">
                                                <p class="mt-2">
                                                    <button onclick="return confirm('Are you sure you want to delete this image?')" class="btn btn-danger btn-sm delete-image" data-image-id="{{$img->id}}">
                                                        delete
                                                    </button>
                                                </p>
                                            </td>
                                        @endforeach
                                    </tr>
                                </table>
                            </td>
                        </tr> --}}
                        
                    </table>
            </form>
            </div>
        </div>
    </div>

</div>


 <!-- Page level plugins -->


@endsection