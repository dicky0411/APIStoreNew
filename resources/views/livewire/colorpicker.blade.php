<div>
    <div class="container mt-5">
        <h1 class="text-center mb-3">Color Picker</h1>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="calendarMonth">Please Type the value for R:</label>
                <input type="text" class="form-control" wire:model.defer="r"  required>
            </div>
            <div class="form-group mt-3">
                <label for="calendarDay">Please Type the value for G:</label>
                <input type="text" class="form-control" wire:model.defer="g"  required>
            </div>
            <div class="form-group mt-3">
                <label for="calendarDay">Please Type the value for B:</label>
                <input type="text" class="form-control" wire:model.defer="b" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Search</button>
        </form>
        
        <div id="result" class="mt-4">
            @if ($hsl && $hex)
                <div class="alert alert-success">
                    For the color combinations in RGB: <strong>{{$r}},{{$g}},{{$b}}</strong> <br>
                    <b>HEX: {{$hex}}</b> <br>
                    <b>HSL: {{$hsl}}</b>
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
