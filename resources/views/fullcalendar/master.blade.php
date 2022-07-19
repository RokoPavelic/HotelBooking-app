<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <link href={{ asset('assets/fullcalendar/lib/main.css') }} rel='stylesheet' />
    <link rel="stylesheet" href={{ mix('css/adminStyles.css') }}>
    <script src={{ asset('assets/fullcalendar/lib/main.js') }}></script>
</head>

<body>
    <header>
        @include('components/adminNav')
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            /* initialize the external events
            -----------------------------------------------------------------*/

            var containerEl = document.getElementById('external-events-list');
            new FullCalendar.Draggable(containerEl, {
                itemSelector: '.fc-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText.trim()
                    }
                }
            });

            //// the individual way to do it
            // var containerEl = document.getElementById('external-events-list');
            // var eventEls = Array.prototype.slice.call(
            //   containerEl.querySelectorAll('.fc-event')
            // );
            // eventEls.forEach(function(eventEl) {
            //   new FullCalendar.Draggable(eventEl, {
            //     eventData: {
            //       title: eventEl.innerText.trim(),
            //     }
            //   });
            // });

            /* initialize the calendar
            -----------------------------------------------------------------*/

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                navlinks: true,
                selectable: true,
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function(arg) {
                    // is the "remove after drop" checkbox checked?
                    if (document.getElementById('drop-remove').checked) {
                        // if so, remove the element from the "Draggable Events" list
                        arg.draggedEl.parentNode.removeChild(arg.draggedEl);
                    }
                },
                eventResize: function(event) {

                    alert('Event rescheduled')

                },
                events: [{
                        "title": "All Day Event",
                        "start": "2022-09-01"
                    },
                    {
                        "title": "Long Event",
                        "start": "2020-09-07",
                        "end": "2022-09-10"
                    },
                    {
                        "id": "999",
                        "title": "Repeating Event",
                        "start": "2022-09-09T16:00:00-05:00"
                    },
                    {
                        "id": "999",
                        "title": "Repeating Event",
                        "start": "2022-09-16T16:00:00-05:00"
                    },
                    {
                        "title": "Conference",
                        "start": "2022-09-11",
                        "end": "2022-09-13"
                    },
                    {
                        "title": "Meeting",
                        "start": "2022-09-12T10:30:00-05:00",
                        "end": "2022-09-12T12:30:00-05:00"
                    },
                    {
                        "title": "Lunch",
                        "start": "2022-09-12T12:00:00-05:00"
                    },
                    {
                        "title": "Meeting",
                        "start": "2022-09-12T14:30:00-05:00"
                    },
                    {
                        "title": "Happy Hour",
                        "start": "2022-09-12T17:30:00-05:00"
                    },
                    {
                        "title": "Dinner",
                        "start": "2022-09-12T20:00:00"
                    },
                    {
                        "title": "Birthday Party",
                        "start": "2022-09-13T07:00:00-05:00"
                    },
                    {
                        "title": "Click for Google",
                        "url": "http://google.com/",
                        "start": "2022-09-28"
                    }
                ]
            });
            calendar.render();

        });
    </script>
    <style>
        body {
            font-size: 14px;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        }

        #external-events {

            left: 20px;
            top: 20px;
            width: 150px;
            padding: 0 10px;

            text-align: left;
        }

        #external-events h4 {
            font-size: 16px;
            margin-top: 0;
            padding-top: 1em;
        }

        #external-events .fc-event {
            margin: 3px 0;
            cursor: move;
        }

        #external-events p {
            margin: 1.5em 0;
            font-size: 11px;
            color: #666;
        }

        #external-events p input {
            margin: 0;
            vertical-align: middle;
        }

        #calendar-wrap {
            margin-left: 2rem;
            width: 100%;

        }

        #calendar {
            max-width: 1000px;
            margin: 0 auto;
            height: 90vh;
        }
    </style>
    </head>

    <body>
        <div id='wrap' class="container">
            @include('components/adminside')

            <div id='external-events'>
                <h4>Make Reservations</h4>

                <div id='external-events-list'>
                    <div class='fc-event fc-h-event-room fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Golden Suite </div>
                    </div>
                    <div class='fc-event fc-h-event-room fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Monochrome</div>
                    </div>
                    <div class='fc-event fc-h-event-room fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Blue Room</div>
                    </div>
                    <div class='fc-event fc-h-event-room fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Geographical</div>
                    </div>
                    <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Main Hall</div>
                    </div>
                    <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Pond</div>
                    </div>
                    <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Garden</div>
                    </div>
                    <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Barn</div>
                    </div>
                    <div class="type-res"> Type of reservations
                        <div class="type-res-room"></div>
                        <p>Room</p>
                        <div class="type-res-event"></div>
                        <p>Event</p>
                    </div>
                </div>

                <p>
                    <input type='checkbox' id='drop-remove' />
                    <label for='drop-remove'>remove after drop</label>
                </p>
            </div>

            <div id='calendar-wrap'>
                <div id='calendar'></div>
            </div>


        </div>
    </body>
    @include('components/adminFooter')

</html>
