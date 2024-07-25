<div>

    <h1>API IP Region INFO</h1>


    <div class="container mt-5">
        <h1 class="text-center">Location</h1>
        <form id="ipForm" class="mt-4">
            <button type="button" wire:click='search' class="btn btn-primary btn-block">Check</button>
        </form>
        <div id="result" class="mt-4">
            region is : {{ $region }}
        </div>
    </div>
</div>
