<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ mix("css/adminStyles.css") }}>
    {{-- @yield('styleLink') --}}
    
    <link href="{{asset('bs5/bootstrap.min.css')}}" rel="stylesheet" />
    {{-- <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"> --}}
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Admin Page</title>
  
</head>

<body>

    @include('components/adminNav')  
   
    <div class="main">

        @include('components/adminSide')
        <div class="main-content">
            @yield('content')

        </div>
    </div>

    @include('components/adminFooter')


</body>

</html>
