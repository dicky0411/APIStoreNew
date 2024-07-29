<div>
    <h1>API IP Region INFO</h1>

    <div class="container mt-5">
        <h1 class="text-center">IP 地址查询</h1>
        <!-- Livewire component for IP search -->
        <form id="ipForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="ipAddress">请输入 IP 地址:</label>
                <input type="text" class="form-control" wire:model.defer="ip" id="ipAddress" placeholder="例如: 192.168.1.1" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询</button>
        </form>
        <div id="result" class="mt-4">
            @if ($region)
                <div class="alert alert-success">
                    IP is: {{ $ip }} <br>
                    Region is: {{ $region }}
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
