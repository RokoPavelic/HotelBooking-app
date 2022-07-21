@extends('layouts.indexAdmin')  

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ ucfirst($data->name) }}<span>s Page</span>
                <a href="{{url('admin/main')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
           
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Lastname</th>
                            <td>{{$data->lastname}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{$data->phone_number}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{$data->id_number}}</td>
                        </tr>
                        <tr>
                            <th>Bank Account</th>
                            <td>{{$data->bank_account}}</td>
                        </tr>
                        <tr>
                            <th>Health Insurance</th>
                            <td>{{$data->helth_insurance}}</td>
                        </tr>
                       
                    </table>
            
            </div>
        </div>
    </div>

</div>

@endsection