<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel = "icon" type = "image/png" href = "./images/logo.png">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="
        css/footer.css">
        <link rel="stylesheet" href="css/contact-us.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/navbar.css">
        <title>Château Třebešice</title>
        
    </head>
    <body class="container">
        {{-- <header>
            @include('components/navbar')
        </header>

        
            @include('components/footer') --}}
        
        
        <div id="root"></div>
        <script src="{{ mix('js/finalProject.js') }}"></script>
    </body>
</html> 