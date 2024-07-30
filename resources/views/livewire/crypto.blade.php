<div>
    <br>
    <div class="container mt-5">
        <h1 class="text-center">加密货币现实价格</h1>
        <h1 class="text-center">Cryptocurrency Current Price</h1>

        <form id="cryptoForm" class="mt-4" wire:submit.prevent="search">
            <div class ="form-group">
                <label for="currency">Choose a currency:</label>
                <select name="currency" id="currency" wire:model.defer="currency">
                    <option value = "USD">USD/美元</option>
                    <option value = "EUR">EURO/欧币</option>
                    <option value = "CNY">YUAN/元</option>
                </select><br>
                <label for="cryptoSymbol">Please Type the Currency Symbol / 请输入货币符号</label>
                <input type="text" class="form-control" wire:model.defer="symbol" id="currencySymbol" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询/submit</button>
        </form>

        <div id="result" class="mt-4">
            @if ($currencyPrice)
                <div class="alert alert-success">
                    {{$symbol}} in {{$currency}} is {{$currencyPrice}} units
                </div>
                
            @endif

            @if($errorMessage)
                <div class="alert alert-danger">
                    {{$errorMessage}}
                </div>
            @endif
        </div>   
    </div>
</div>