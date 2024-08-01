<div>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sunrise/Sunset Time</h2>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="calendarMonth">Please enter the latitude</label>
                <input type="text" class="form-control" wire:model.defer="latitude" placeholder="..."id="latitude"  required>
            </div>
            <div class="form-group mt-3">
                <label for="calendarDay">Please enter the longitude</label>
                <input type="text" class="form-control" wire:model.defer="longitude" placeholder="..." id="longitude" required>
            </div>
            

            <button type="submit" class="btn btn-primary btn-block mt-4">search</button>
        </form>
        
        <div id="result" class="mt-4">
            @if ($elevation)
                <div class="alert alert-success">
                    <h4>Elevation Information</h4>
                    <p>At the given location <strong>{{$latitude}}</strong>, <strong>{{$longitude}}</strong></p>
                    <p>The elevation is <strong>{{$elevation}}m</strong></p>
                    
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
