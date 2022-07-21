@extends('layouts.indexAdmin')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Room
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
            <form method="POST" enctype="multipart/form-data" action="{{url('admin/rooms')}}">
                @csrf
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Room Type</th>
                            <td><input name="room_type" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><input name="name" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea name="description" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td><textarea name="location" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td><textarea name="size" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Capacity</th>
                            <td><textarea name="capacity" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Amenities</th>
                            <td><textarea name="amenities" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Facilities</th>
                            <td><textarea name="facilities" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Gallery</th>
                            <td><input type="text" multiple name="imgs" /></td>
                        </tr>
                        <tr>
                            <th>Price Low Season</th>
                            <td><input name="price_low" type="number" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Price Medium Season</th>
                            <td><input name="price_medium" type="number" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Price High Season</th>
                            <td><input name="price_high" type="number" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary"/>
                            </td>
                        </tr>
                    </table>
            </form>
            </div>
        </div>
    </div>

</div>

@endsection


