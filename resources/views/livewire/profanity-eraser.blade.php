<div>
    <div class="container mt-5">
        <h1 class="text-center mb-3">脏话屏蔽</h1>
        <h2 class="text-center mb-4">Profanity Eraser</h2>
        
        <form id="ipForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="paragraph">Enter your block of text to be cleaned:</label>
                <textarea id="paragraph" name="paragraph" class="form-control" wire:model.defer="message" rows="6" placeholder="Enter your paragraph here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Clean</button>
        </form>
        
        <div id="result" class="mt-4">
            @if ($returnMsg)
                <div class="alert alert-success">
                    <strong>Cleaned Text:</strong>
                    <p class="mt-2">{{ $returnMsg }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
