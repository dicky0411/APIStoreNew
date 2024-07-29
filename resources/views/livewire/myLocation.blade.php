<div>
    <h1>Country API</h1>

    <div class="container mt-5">
        <h1 class="text-center">Country Info</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="countryCode">Enter Country Code:</label>
                <input type="text" class="form-control" wire:model.defer="countryCode" id="countryCode" placeholder="e.g., US" required>
            </div>
            <button type="button" wire:click="search" class="btn btn-primary btn-block">Search</button>
        </form>
        <div id="result" class="mt-4">
            @if ($countryDetails)
                <div class="alert alert-success">
                    <h2>Country: {{ $countryDetails[0]['name']['common'] }}</h2>
                    <p>Region: {{ $countryDetails[0]['region'] }}</p>
                    <p>Population: {{ $countryDetails[0]['population'] }}</p>
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
