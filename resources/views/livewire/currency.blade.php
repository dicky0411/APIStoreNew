<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">Currency Search</h1>
        
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="calendarMonth">Please Type the Country</label>
                <input type="text" class="form-control" wire:model.defer="country" id="country" placeholder="Canada" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询</button>
        </form>
        <div id="result" class="mt-4">
            @if ($currency)
                <div class="alert alert-success">
                    In {{$country}}, they use {{$currency}} as the currency. 
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
