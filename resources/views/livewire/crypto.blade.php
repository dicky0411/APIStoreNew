<div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">加密货币现实价格</h1>
        <h1 class="text-center mb-4">Cryptocurrency Current Price</h1>

        <form id="cryptoForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="currency">Choose a currency:</label>
                <select name="currency" id="currency" wire:model.defer="currency" class="form-control">
                    <option value="">Select Currency</option>
                    <option value="USD">USD/美元</option>
                    <option value="EUR">EURO/欧币</option>
                    <option value="CNY">YUAN/元</option>
                </select>
            </div>
            
            <div class="form-group mt-3">
                <label for="cryptoSymbol">Please Type the Currency Symbol / 请输入货币符号</label>
                <input type="text" class="form-control" wire:model.defer="symbol" id="currencySymbol" placeholder="Ex: BTC, ETH" required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block mt-4">查询/Submit</button>
        </form>

        <div id="result" class="mt-4">
            @if ($currencyPrice)
                <div class="alert alert-success">
                    <h4>{{ strtoupper($symbol) }} Price</h4>
                    <p>The current price of {{ strtoupper($symbol) }} in {{ $currency }} is {{ $currencyPrice }}.</p>
                </div>
            @endif

            @if($errorMessage)
                <div class="alert alert-danger">
                    {{ $errorMessage }}
                </div>
            @endif
        </div>
    </div>
</div>
