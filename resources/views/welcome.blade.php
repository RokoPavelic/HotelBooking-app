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
        <div class="burger burger-show" x-data="{ show: false }" @click.away="show = false" >
            <div class="burger_icon" @click="show = ! show">
                <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                    <svg width="50" height="50" viewBox="0 0 100 100">
                      <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                      <path class="line line2" d="M 20,50 H 80" />
                      <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </button>
                
            </div>
            <div class="burger__menu burger__menu-show" x-show="show">
                
                <ul>
                    <div class="navbar__logo">
                        <img src="./images/logo-green.svg" alt="logo" width="20px">
                    </div>
                    <li><a href="/">Home</a></li>
                    <li><a href="/rooms">Rooms</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/experience">Experience</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/contacts">Contacts</a></li>
                </ul>
            </div>
        </div>
        {{-- <header>
            @include('components/navbar')
        </header>

        
            @include('components/footer') --}}
        
        
        <div id="root"></div>
        <script src="{{ mix('js/finalProject.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    </body>
</html> 