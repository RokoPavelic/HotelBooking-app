@extends('layouts.indexAdmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary mx-2">Edit {{ $data->name }}s Data
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
            <form method="POST" action="{{url('admin/main/' . $data->id . '/edit')}}">
                @csrf
                @method('put')
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Name</th>
                        <td><input name="name" type="text" class="form-control" value="{{ $data->name }}" /></td>
                    </tr>
                    <tr>
                        <th>Lastname</th>
                        <td><input type="text" name="lastname" class="form-control" value="{{ $data->lastname }}"/></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="email" name="email" class="form-control" value="{{ $data->email }}"/></td>
                    </tr>
                    @can('admin')
                        <tr>
                            <th>Password</th>
                            <td><input type="password" name="password" class="form-control" value="{{ $data->password }}"/></td>
                        </tr>
                        <tr>
                            <th>Is Admin?</th>
                            <td><input type="number" name="is_admin" class="form-control" /></td>
                        </tr>
                    @endcan
                    <tr>
                        <th>Phone Number</th>
                        <td><input type="text" name="phone_number" class="form-control" value="{{ $data->phone_number }}"/></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><textarea name="address" class="form-control">{{ $data->address }}</textarea></td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <td><input type="text" name="id_number" class="form-control" value="{{ $data->id_number }}"/></td>
                    </tr>
                    <tr>
                        <th>Bank Account</th>
                        <td><input type="text" name="bank_account" class="form-control" value="{{ $data->bank_account }}"/></td>
                    </tr>
                    <tr>
                        <th>Health Insurance</th>
                        <td><input type="number" name="helth_insurance" class="form-control" value="{{ $data->helth_insurance }}"/></td>
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


 <!-- Page level plugins -->


@endsection


