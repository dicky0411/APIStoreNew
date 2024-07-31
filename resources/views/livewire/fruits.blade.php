<div>
    <br>
    <div class="container mt-5">
        <h1 class="text-center">Fruit Nutritions Information</h1>

        <form id="cryptoForm" class="mt-4" wire:submit.prevent="search">
            <div class ="form-group">
                <label for="fruit">Please enter a fruit(example: mango)</label>
                <input type="text" class="form-control" wire:model.defer="fruit" id="fruit" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">submit</button>
        </form>

        <div id="result" class="mt-4">
            @if ($fat && $carbohydrates && $calories && $sugar && $protein)
                <div class="alert alert-success">
                    For each serving of {{$fruit}}: <br>
                    Fat: {{$fat}}g <br>
                    Carbohydrates: {{$carbohydrates}}g <br>
                    Calories: {{$calories}}g <br>
                    Sugar: {{$sugar}}g <br>
                    Protein: {{$protein}}g <br>
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