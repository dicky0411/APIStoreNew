<div>
    <div class="container mt-5">
        <h1 class="text-center">脏话屏蔽</h1>
        <h1 class="text-center">Profanity Eraser</h1>
        <form id="ipForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="paragraph">Enter your block of text to be cleaned:</label><br>
                <textarea id="paragraph" name="paragraph" class="form-control" wire:model.defer="message" rows="6" cols="40" placeholder="Enter your paragraph here..."></textarea><br>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Clean</button>
        </form>
        <div id="result" class="mt-4">
        @if ($returnMsg)
                <div class="alert alert-success">
                    {{$returnMsg}}
                </div>
        @endif
        </div>
    </div>
</div>
