<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ mix("css/adminStyles.css") }}>
    <title>Admin Page</title>
    @if(!Session::has('adminData'))
    <script type="text/javascript">
        window.location.href="{{url( 'admin/login' )}}";
    </script>
@endif
</head>




<body>


    <div class="main">

        @include('components/adminside')
        <div class="main-content">
            @yield('content')

        </div>
    </div>

    @include('components/adminFooter')


</body>

</html>
