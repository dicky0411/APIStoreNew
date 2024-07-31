<div>
    <div class="container mt-5">
        <h1 class="text-center">Language Detector</h1>
        <form id="ipForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="paragraph">Enter the word/sentence/paragraph that you want to be detected</label><br>
                <textarea id="message" name="message" class="form-control" wire:model.defer="message" rows="6" cols="40" placeholder="Enter your word/sentence/paragraph here..."></textarea><br>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Detect</button>
        </form>
        <div id="result" class="mt-4">
            @if ($language && $confidence)
                <div class="alert alert-success">
                    "{{$message}}" is {{$language}} with a confidence of {{$confidence}} Units
                </div>
            @endif
        </div>
    </div>
</div>
