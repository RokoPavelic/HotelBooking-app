@extends('layouts.indexAdmin')

@section('content')
    @can('admin')
    <div class="container-fluid">

        <!-- Page Heading -->
        
    
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Room types
                    <a href="{{url('admin/roomtype/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone</th>
                               
                            </tr>
                        </tfoot>
                        <tbody>
                            
                            @if($data)
                                @foreach($data as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->lastname }}</td>
                                        <td>
                                            <a href="{{url('admin/employee/' . $d->id )}}" ><button class="btn btn-info btn-sm">Show</button></a>
                                            <a href="{{url('admin/employee/' . $d->id . '/edit')}}" ><button class="btn-primary btn btn-sm">Edit</button></a>
                                            @can('admin')
                                                <a onclick="return confirm('Are you sure that you want to delete this data?')"href="{{url('admin/rooms/' . $d->id . '/delete' )}}" class="btn btn-danger btn-sm">Fire</a>
                                            @endcan
                                        </td>
                                    </tr>
    
                                @endforeach
                           @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
    
    @endcan
@endsection