<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">Country Metadata</h1>
        
        <form id="countryForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="country">Please Type the Country:</label>
                
                <input type="text" class="form-control" wire:model.defer="country" id="country" placeholder="Ex: Canada" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">search</button>
        </form>
        <div id="result" class="mt-4">
            @if ( $region)
                <div class="alert alert-success">
                    {{$country}} data:<br>
                   
                    Capital: {{$capital}} <br>
                    Region: {{$region}} <br>
                    Sub-Region: {{$subregion}} <br>
                    Population: {{$population}}
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
