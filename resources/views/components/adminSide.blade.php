
<div class="sidebar">

    <div class="sidebar-links">
        
            <a href="/admin">Dashboard</a>
            @can('admin')
                <a href="/admin/main">Manage</a>
            @endcan
            <a href="/admin/rooms">Rooms</a>
            <a href="/admin/events">Event Planner</a>
        
    </div>
</div>