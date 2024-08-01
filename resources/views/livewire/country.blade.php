<div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Country Metadata</h1>
        
        <form id="countryForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="country">Please Type the Country:</label>
                <input type="text" class="form-control" wire:model.defer="country" id="country" placeholder="Ex: Canada" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">Search</button>
        </form>

        <div id="result" class="mt-4">
            @if ($region)
                <div class="alert alert-success">
                    <h4>{{ $country }} Data</h4>
                    <p><strong>Capital:</strong> {{ $capital }}</p>
                    <p><strong>Region:</strong> {{ $region }}</p>
                    <p><strong>Sub-Region:</strong> {{ $subregion }}</p>
                    <p><strong>Population:</strong> {{ $population }}</p>
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
