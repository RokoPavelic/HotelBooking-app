<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ mix("css/adminStyles.css") }}>
    {{-- @yield('styleLink') --}}
    
    <link href="{{asset('bs5/bootstrap.min.css')}}" rel="stylesheet" />
<<<<<<< HEAD
    {{-- <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"> --}}
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Admin Page</title>
  
=======
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href={{ asset('assets/fullcalendar/lib/main.css') }} rel='stylesheet' />
    <link rel="stylesheet" href={{ mix('css/adminStyles.css') }}>
    <script src={{ asset('assets/fullcalendar/lib/main.js') }}></script>
    
    <title>Admin Dashboard</title>
    @if(!Session::has('adminData'))
    <script type="text/javascript">
        window.location.href="{{url( 'admin/login' )}}";
    </script>
@endif
>>>>>>> d3715c07b7f8aa5d0d85875cede8dae221ce5222
</head>

<body>

    @include('components/adminNav')  
   
    <div class="main">

<<<<<<< HEAD
        @include('components/adminSide')
        <div class="main-content">
=======
        @include('components/adminside')
>>>>>>> d3715c07b7f8aa5d0d85875cede8dae221ce5222
            @yield('content')

    </div>

    @include('components/adminFooter')


</body>

</html>
