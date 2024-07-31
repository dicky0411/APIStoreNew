<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">Advance IP API Search</h1>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="calendarMonth">Please Type the IP Address:</label>
                <input type="text" class="form-control" wire:model.defer="ip" id="ip" placeholder="Example: 103.231.84.50" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询</button>
        </form>
        <div id="result" class="mt-4">
            @if ($lat && $long && $zip && $company)
                <div class="alert alert-success">
                    IP: {{$ip}} <br>
                    Latitude: {{$lat}} <br>
                    Longtidue: {{$long}} <br>
                    Zip Code (If Applicable): {{$zip}} <br>
                    Internet Service Provider: {{$company}}
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
