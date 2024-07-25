<div>

    <h1>API IP Region INFO</h1>


    <div class="container mt-5">
        <h1 class="text-center">IP 地址查询</h1>
        <form id="ipForm" class="mt-4">
            <div class="form-group">
                <label for="ipAddress">请输入 IP 地址:</label>
                <input type="text" class="form-control" wire:model.defer='ip' id="ipAddress"
                    placeholder="例如: 192.168.1.1" required>
            </div>
            <button type="button" wire:click='search' class="btn btn-primary btn-block">查询</button>
        </form>
        <div id="result" class="mt-4">
            ip is: {{ $ip }}
            region is : {{ $region }}
        </div>
    </div>
</div>
