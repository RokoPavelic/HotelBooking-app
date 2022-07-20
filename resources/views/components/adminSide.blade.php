
<div class="sidebar">

    <div class="sidebar-links">
        
            <a href="/admin">Dashboard</a>

            @can('admin')
                <a href="/admin/main">Manage</a>
                <a class="collapse-item" href="{{url('admin/main/create')}}">Add New Employee</a>
            @endcan

            {{-- <a href="/adminbookings">Bookings</a> --}}

            <a href="/admin/rooms">Rooms</a>
            <a href="/admin/events">Event Planner</a>
        
    </div>
</div>