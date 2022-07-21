@extends('layouts.indexAdmin')  

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rooms
                <a href="{{url('admin/rooms')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
           
                    <table class="table table-bordered">
                        <tr>
                            <th>Room Type</th>
                            <td>{{$data->room_type}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>{{$data->location}}</td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>{{$data->size}}</td>
                        </tr>
                        <tr>
                            <th>Capacity</th>
                            <td>{{$data->capacity}}</td>
                        </tr>
                        <tr>
                            <th>Amenities</th>
                            <td>{{$data->amenities}}</td>
                        </tr>
                        <tr>
                            <th>Facilities</th>
                            <td>{{$data->facilities}}</td>
                        </tr>
                        <tr>
                            <th>Gallery</th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        @foreach($data->images as $img)
                                            <td class="imgcol{{$img->id}}">
                                                <img src="{{ asset( $img->src )}}" alt="{{$img->alt}}" width="150px">
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
                        </tr>
                        <tr>
                            <th>Price Low Season</th>
                            <td>{{$data->price_low}}</td>
                        </tr>
                        <tr>
                            <th>Price Medium Season</th>
                            <td>{{$data->price_medium}}</td>
                        </tr>
                        <tr>
                            <th>Price High Season</th>
                            <td>{{$data->price_high}}</td>
                        </tr>
                       
                    </table>
            
            </div>
        </div>
    </div>

</div>

@endsection