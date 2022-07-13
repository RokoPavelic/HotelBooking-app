@extends('layouts/index')

@section('header')
        <link rel="stylesheet" href="css/contact-us.css">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href='css/main.css' rel='stylesheet' />
        {{-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'> --}}
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
@endsection
       
   
@section('content')
        
    <div id='calendar'></div>

    <script>
      $(function () {
	$('#calendar-holder').fullCalendar({
		header: {
		    left: 'prev, next',
		    center: 'title',
		    right: 'month, agendaWeek, agendaDay'
		},
		timezone: ('Europe/London'),
		businessHours: {
		    start: '09:00',
		    end: '17:30',
		    dow: [1, 2, 3, 4, 5]
		},
		allDaySlot: false,
		defaultView: 'agendaWeek',
		lazyFetching: true,
		firstDay: 1,
		selectable: true,
		timeFormat: {
		    agenda: 'h:mmt',
		    '': 'h:mmt'
		},
		columnFormat:{
		    month: 'ddd',
		    week: 'ddd D/M',
		    day: 'dddd'
		},
		editable: true,
		eventDurationEditable: true,
		eventSources: [
		{
			url: '',
			type: 'POST',
			data: {
				filters: { param: foo }
			}
			// error: function() {
			//    //alert()
			// }
		}
    
        ]
    });
})
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

@endsection