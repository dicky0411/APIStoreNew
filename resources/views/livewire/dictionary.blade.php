<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">Dictionary Defintion</h1>
        <!-- Livewire component for IP search -->
        <form id="ipForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="ipAddress">Type in a word that you are unsure of the definitions of</label>
                <input type="text" class="form-control" wire:model.defer="word" id="ipAddress" placeholder="apple" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
        <div id="result" class="mt-4">
            @if ($definition)
                <div class="alert alert-success">
                    @foreach($definition as $line){
                        {{$line}} <br>
                    }
                    @endforeach

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
