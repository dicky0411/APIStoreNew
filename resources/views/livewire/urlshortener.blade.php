<div>
    <div class="container mt-5">
        <h1 class="text-center">URL Condenser</h1>
        <form id="urlForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="link">Input the link you want to condense</label><br>
                <input type="text" class="form-control" wire:model.defer="link" id="link" placeholder="www.example.com/long-url" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Condense URL</button>
        </form>
        <div id="result" class="mt-4">
            @if ($shorten)
                <div class="alert alert-success">
                    Shortened URL: <a href="{{ $shorten }}" target="_blank">{{ $shorten }}</a>
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
