<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "icon" type = "image/png" href = "./images/logo.png">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="
        css/footer.css">
        <link rel="stylesheet" href="css/contact-us.css">
        <title>Château Třebešice</title>
        
    </head>
<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
</body>
</html>