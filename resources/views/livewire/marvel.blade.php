<div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Next Marvel Production</h1>
        
        <form id="calendarForm" class="d-flex justify-content-center" wire:submit.prevent="search">
            <button type="submit" class="btn btn-primary">查询</button>
        </form>

        <div id="result" class="mt-4">
            @if($daysTil)
                <div class="alert alert-success">
                    <h4 class="alert-heading">Upcoming Marvel Production</h4>
                    <p><strong>Days Until Release:</strong> {{$daysTil}} days</p>
                    <p><strong>Movie Title:</strong> {{$title}}</p>
                    <p><strong>Description:</strong> {{$overview}}</p>
                    <p><strong>Release Date:</strong> {{$release_date}}</p>
                </div>
            @else
                <div class="alert alert-info">
                    <p>No upcoming Marvel productions found. Please check back later.</p>
                </div>
            @endif
        </div>
    </div>
</div>
