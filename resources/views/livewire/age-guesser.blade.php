<div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Age Guesser</h1>
        
        <!-- Form for age guessing -->
        <form id="ageGuesserForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="name">Enter a Name:</label>
                <input type="text" class="form-control" wire:model.defer="name" id="name" placeholder="e.g., Richard" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Guess</button>
        </form>
        
        <!-- Result Display -->
        <div id="result" class="mt-4">
            @if ($age)
                <div class="alert alert-success text-center">
                    <h4>Age Guesser Result</h4>
                    <p>{{ $name }} is most likely to be {{ $age }} years old.</p>
                </div>
            @endif

            @if ($errorMessage)
                <div class="alert alert-danger text-center">
                    {{ $errorMessage }}
                </div>
            @endif
        </div>
    </div>
    
</div>


