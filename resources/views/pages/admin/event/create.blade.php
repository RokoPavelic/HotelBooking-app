@extends('layouts.indexAdmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Room
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
            <form method="POST" enctype="multipart/form-data" action="{{url('admin/events')}}">
                @csrf
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Event ID</th>
                            <td><input name="event-id" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Event Name</th>
                            <td><input name="event-name" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><textarea name="event-date" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Start</th>
                            <td><textarea name="event-start" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>End</th>
                            <td><textarea name="event-end" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea name="description" class="form-control"></textarea></td>
                        </tr>
                    </table>
            </form>
            </div>
        </div>
    </div>

</div>


 <!-- Page level plugins -->


@endsection


