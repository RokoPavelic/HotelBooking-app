@extends('pages.admin.login_layout')


@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                   
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your Email Address below
                                        and we'll send you a link to reset your password!</p>
                                </div>
                                <form method="POST" class="user" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">

                                        <input type="text" class="form-control form-control-user  @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}"
                                            id="exampleInputEmail" 
                                            name="email"
                                            aria-describedby="emailHelp"
                                            placeholder="Enter Your Email Address...">
                                    </div>

                                    <div class="btn btn-primary btn-user btn-block mt-2">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.html">Already have an account? Login!</a>
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
