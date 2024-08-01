<div>
    <br>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Currency Search</h1>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="country">Please Type the Country</label>
                <input type="text" class="form-control" wire:model.defer="country" id="country" placeholder="Canada" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">查询</button>
        </form>
        
        <div id="result" class="mt-4">
            @if ($currency)
                <div class="alert alert-success">
                    In <strong>{{$country}}</strong>, they use <strong>{{$currency}}</strong> as the currency.
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
