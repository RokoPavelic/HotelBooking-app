@extends('pages.admin.login_layout')


@section('content')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        @if(Session::has('success'))
                                            <p class="text-success">{{ session('success') }}</p>
                                        @endif
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post" action="{{url('admin/login')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="username" aria-describedby="emailHelp"
                                                placeholder="username" @if(Cookie::has('adminuser')) value="{{Cookie::get('adminuser')}}"@endif>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" @if(Cookie::has('adminpwd')) value="{{Cookie::get('adminpwd')}}"@endif>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember_me" class="custom-control-input" id="customCheck" @if(Cookie::has('adminuser')) checked @endif>
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login" />
                                            
                                    </form>
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            <p class="text-danger">{{ $error }}</p>
                                        @endforeach
                                    @endif
                                    @if(Session::has('msg'))
                                        <p class="text-danger">{{ session('msg') }}</p>
                                    @endif
                                    <hr>
                                    <div class="text-center">
                                        <a class="small mx-2" href="{{url('admin/register')}}">Register</a>
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
