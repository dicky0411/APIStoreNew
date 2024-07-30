<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">性别猜测</h1>
        <h1 class="text-center">Gender Probability</h1>
        <!-- Livewire component for IP search -->
        <form id="gender" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="name">Please Enter a Name:</label>
                <input type="text" class="form-control" wire:model.defer="name" id="name" placeholder="Example: Jacky" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enter</button>
        </form>
        <div id="result" class="mt-4">
            @if ($gender && $percentage)
                <div class="alert alert-success">
                    {{$name}} has a {{$percentage}}% chance of being a {{$gender}}
                </div>
            @endif
        </div>
    </div>
</div>
