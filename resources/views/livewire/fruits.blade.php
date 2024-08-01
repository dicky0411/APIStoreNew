<div>
    <br>
    <div class="container mt-5">
        <h1 class="text-center">Fruit Nutritions Information</h1>

        <form id="cryptoForm" class="mt-4" wire:submit.prevent="search">
            <div class ="form-group">
                <label for="fruit">Please enter a fruit(example: mango)</label>
                <input type="text" class="form-control" wire:model.defer="fruit" placeholder="Ex: Apple" id="fruit" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">submit</button>
        </form>

        <div id="result" class="mt-4">
            @if ($fat && $carbohydrates && $calories && $sugar && $protein)
            <div class="alert alert-success">
                    <strong>Nutrition Information for {{$fruit}}:</strong><br>
                    <ul class="list-unstyled">
                        <li><strong>Fat:</strong> {{$fat}}g</li>
                        <li><strong>Carbohydrates:</strong> {{$carbohydrates}}g</li>
                        <li><strong>Calories:</strong> {{$calories}}g</li>
                        <li><strong>Sugar:</strong> {{$sugar}}g</li>
                        <li><strong>Protein:</strong> {{$protein}}g</li>
                    </ul>
                </div> 
            @endif

            @if($errorMessage)
                <div class="alert alert-danger">
                    {{$errorMessage}}
                </div>
            @endif
        </div>   
    </div>
</div>