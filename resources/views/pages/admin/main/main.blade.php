@extends('layouts.indexAdmin')

@section('content')
    @can('admin')
    <div class="container-fluid">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif

        @if(Session::has('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
    

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Employees
                    <a href="{{url('admin/main/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Actions</th>
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
                                            <a href="{{url('admin/main/' . $d->id )}}" ><button class="btn btn-info btn-sm">Show</button></a>
                                            <a href="{{url('admin/main/' . $d->id . '/edit')}}" ><button class="btn-primary btn btn-sm">Edit</button></a>
                                            @can('admin')
                                                <a onclick="return confirm('Are you sure that you want to fire {{ $d->name }}?')"href="{{url('admin/main/' . $d->id . '/delete' )}}" class="btn btn-danger btn-sm">Fire</a>
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