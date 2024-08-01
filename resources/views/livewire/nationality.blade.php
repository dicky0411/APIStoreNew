<div>
    <div class="container mt-5">
        <h1 class="text-center mb-3">Nationality Search API</h1>

        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="name">Please Enter the Name</label>
                <input type="text" class="form-control" wire:model.defer="name" id="name" placeholder="Ex: Richard" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Search</button>
        </form>

        <div id="result" class="mt-4">
            @if ($country_id && $probability)
                <div class="alert alert-success">
                    @foreach ($country_id as $index => $id)
                        <p>Country: {{ $id }} - Probability: {{ $probability[$index] }}%</p>
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
