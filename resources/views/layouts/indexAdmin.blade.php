<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ mix("css/adminStyles.css") }}>
    <link href="{{ asset('bs5/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href={{ asset('assets/fullcalendar/lib/main.css') }} rel='stylesheet' />
    <link rel="stylesheet" href={{ mix('css/adminStyles.css') }}>
    <script src={{ asset('assets/fullcalendar/lib/main.js') }}></script>
    
    <title>Admin Dashboard</title>
   
</head>

<body>

    @include('components/adminNav')  
   
    <div class="main">

    @include('components/adminside')
    @yield('content')

    </div>

    @include('components/adminFooter')


</body>

</html>
