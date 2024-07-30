<div>
    <br>

    <div class="container mt-5">
        <h1 class="text-center">节日查询</h1>
        <h1 class="text-center">Calendar Search</h1>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="calendarMonth">Please Type the Month (请输入月):</label>
                
                <input type="text" class="form-control" wire:model.defer="month" id="calendarMonth" placeholder="例如: 12" required>
                <br>
                <label for="calendarDay">Please Type the Day (请输入日):</label>
                <input type="text" class="form-control" wire:model.defer="day" id="calendarDay" placeholder="例如: 25" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询</button>
        </form>
        <div id="result" class="mt-4">
            @if ($holidayName)
                <div class="alert alert-success">
                    On {{$month}}/{{$day}}  <br>
                    The Holiday is: {{ $holidayName }}
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
