<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel = "icon" type = "image/png" href = "./images/logo.png">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="
        css/footer.css">
        <link rel="stylesheet" href="css/contact-us.css">
        <link href='css/calender/main.css' rel='stylesheet' />
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
        <script src='js/main.js' defer></script>
        <script>

            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
            });

        </script>
        <title>Château Třebešice</title>
        
    </head>
<body>
    
   <header>
    <nav>
        <div class="navbar">
            <div class="menu">
                <span class="menu-global menu-top"></span>
                <span class="menu-global menu-middle"></span>
                <span class="menu-global menu-bottom"></span>
              </div>

            <div class="navbar__links-left">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>
            <div class="navbar__logo">
                <img src="./images/logo-green.svg" alt="logo" width="50px">
            </div>
            <div class="navbar__links-right">
                <ul>
                    <li><a href="#">Experience</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>
    </nav>
   </header>
    <main>

        <div id="root">@yield('content')</div>
        <div id='calendar'></div>
    </main>
   <footer class="footer">
        <div class="footer__logo">
            <img src="./images/logo-smoke.svg" alt="logo" width="50px">
        </div>
        <div class="footer-nav">
            
            <a href="#">Home</a>
            <a href="#">Rooms</a>
            <a href="#">Events</a>
            <a href="#">Experience</a>
            <a href="#">Gallery</a>
            <a href="/contact
            
            
            
            
            
            
            
            
            
            ">Contacts</a>
        </div>
        <div class="footer-info">

            <p>Privacy Policy | Cookie Policy</p>
            <p> © 2022 Chateau Trebesice Zámek -Třebešice  -28601 Čáslav -Czech Republic
                info@ct.com +420 732 7977 <br>
                <br>
                


            </p>
        </div>
   </footer>

  
    
    <script>
        $(document).reday(function () {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content');
                }
            });

            let calender = $('#calender').fullCalender();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
</body>
</html>