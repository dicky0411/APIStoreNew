<div>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sunrise/Sunset Time</h2>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="calendarMonth">Please enter the latitude</label>
                <input type="text" class="form-control" wire:model.defer="latitude" id="latitude"  required>
            </div>
            <div class="form-group mt-3">
                <label for="calendarDay">Please enter the longitude</label>
                <input type="text" class="form-control" wire:model.defer="longitude" id="longitude" required>
            </div>
            <div class="form-group mt-3">
                <label for="calendarDay">Please enter the time zone (UTC+N)</label>
                <input type="text" class="form-control" wire:model.defer="timezone" id="longitude" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-4">search</button>
        </form>
        
        <div id="result" class="mt-4">
            @if ($sunset && $sunrise)
                <div class="alert alert-success">
                    <h4>Sunset Sunrise Information</h4>
                    <p>At the given location</p>
                    <p>Sun will rise at <strong>{{$sunrise}}</strong></p>
                    <p>Sun will set at <strong>{{$sunset}}</strong></p>
                </div>
            @endif

            @if ($errorMessage)
                <div class="alert alert-danger">
                    {{ $errorMessage }}
                </div>
            @endif
        </div>
    </div>
</div>
