<div>
    <style>
         #result-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin-top: 20px;
        }
    </style>
    <br>
    <div class="container mt-5">
        <h1 class="text-center">我的 IP 地址是什么？</h1>
        <h1 class="text-center">What's my IP address</h1>
        <form id="currentIPform" class="mt-4" wire:submit.prevent="search">
        <div style="text-align: center; margin-top: 10px;">
            <button type="submit" class="round-button">Submit</button>
        </div>
        </form>
    </div>  
    <div id="result-container">
            <div id="result">
                @if ($ip)
                    <div class="alert alert-success">
                        Your current IP is : {{$ip}}
                    </div>
                @endif
            </div>
        </div>
</div>
