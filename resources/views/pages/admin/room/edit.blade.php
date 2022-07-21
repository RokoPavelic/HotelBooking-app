@extends('layouts.indexAdmin')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Room
                <a href="{{url('admin/rooms')}}" class="float-right btn btn-success btn-sm">View All</a>
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
            <form method="POST" action="{{url('admin/rooms/' . $data->id )}}">
                @csrf
                @method('put')
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Room Type</th>
                            <td><input value="{{ $data->room_type }}"name="room_type" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><input value="{{ $data->name }}" name="name" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea name="description" class="form-control">{{ $data->description }}</textarea></td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td><textarea name="location" class="form-control">{{ $data->location }}</textarea></td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td><textarea name="size" class="form-control"></textarea>{{ $data->size }}</td>
                        </tr>
                        <tr>
                            <th>Capacity</th>
                            <td><textarea name="capacity" class="form-control">{{ $data->capacity }}</textarea></td>
                        </tr>
                        <tr>
                            <th>Amenities</th>
                            <td><textarea name="amenities" class="form-control">{{ $data->amenities }}</textarea></td>
                        </tr>
                        <tr>
                            <th>Facilities</th>
                            <td><textarea name="facilities" class="form-control">{{ $data->facilities }}</textarea></td>
                        </tr>
                        <tr>
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
                                    <p>Add new picture </p>
                                    <input type="text" multiple name="imgs" />

                                </table>
                                
                            </td>
                        </tr>
                        <tr>
                            <th>Price Low Season</th>
                            <td><input value="{{ $data->price_low }}" name="price_low" type="number" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Price Medium Season</th>
                            <td><input value="{{ $data->price_medium }}" name="price_medium" type="number" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Price High Season</th>
                            <td><input value="{{ $data->price_high }}" name="price_high" type="number" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Submit "class="button"/>
                            </td>
                        </tr>
                    </table>
            </form>
            </div>
        </div>
    </div>

</div>

@endsection


