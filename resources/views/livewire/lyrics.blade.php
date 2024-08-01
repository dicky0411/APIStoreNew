<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">Lyrics Getter API</h1>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="artist">What artist?</label>
                <input type="text" class="form-control" wire:model.defer="artist" id="city" placeholder="Ex: Drake" required>
            </div>
            <div class="form-group">
                <label for="song">What song?</label>
                <input type="text" class="form-control" wire:model.defer="song" id="city" placeholder="Ex: God's Plan" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
        <div id="result" class="mt-4">
            
            @if ($lyrics)
                <div class="alert alert-success">
                    {!! nl2br(e($lyrics)) !!}
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
