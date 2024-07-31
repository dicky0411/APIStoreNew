<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">Pollution Metrics API</h1>
        
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="AQI">What city would you like to choose?</label>
                <input type="text" class="form-control" wire:model.defer="city" id="city" placeholder="Ex: Toronto" required>
                
            </div>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
        <div id="result" class="mt-4">
            
            @if ($o3 && $pm10 && $pm25 &&$uvi)
                <div class="alert alert-success">
                    In {{$city}}, the average pollution metrics of today are the following: <br>
                    O3 (Ozone): {{$o3}} mg/l <br>
                    PM10 (Particulate Matter 10): {{$pm10}} μg/m³ <br>
                    PM25 (Particulate Matter 25): {{$pm25}} μg/m³ <br>
                    UVI (Ultraviolet Index): {{$uvi}}

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
