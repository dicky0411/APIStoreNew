<div>
    <div class="container mt-5">
        <h1 class="text-center">URL Condenser</h1>
        <form id="ipForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="paragraph">Input the link that you want to condense here</label><br>
                <input type="text" class="form-control" wire:model.defer="link" id="link" placeholder="https://www.youtube.com/watch?v=T1ENMkCyFhk" required>
                    <label for="paragraph">What customized link do you want to use</label><br>
                    <input type="text" class="form-control" wire:model.defer="custom" id="custom" placeholder="goodsong1" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </form>
        <div id="result" class="mt-4">
            @if ($link)
                <div class="alert alert-success">
                    {{$shorten}} is the shortened URL
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
