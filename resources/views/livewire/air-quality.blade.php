<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">Air Quality Index API</h1>
        
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="AQI">What city would you like to choose?</label>
                <input type="text" class="form-control" wire:model.defer="city" id="city" placeholder="Ex: Toronto" required>
                
            </div>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
        <div id="result" class="mt-4">
            
            @if ($aqi)
                <div class="alert alert-success">
                    In {{$city}}, the Air Quality Index is {{$aqi}} <br>
                    {{$message}}
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
