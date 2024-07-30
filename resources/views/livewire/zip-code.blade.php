<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">地址查询</h1>
        <h1 class="text-center">ZipCode Location Search Up</h1>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="ZipCode">Please Type the 5 Digit Zip Code:</label>
                
                <input type="text" class="form-control" wire:model.defer="zip_code" id="zipCode" placeholder="例如: 12" required>
                <br>
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询</button>
        </form>
        <div id="result" class="mt-4">
            @if ($location && $state)
                <div class="alert alert-success">
                    ZipCode {{$zip_code}} is at {{$location}} , {{$state}}
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
