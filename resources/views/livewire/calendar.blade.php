<div>
    <div class="container mt-5">
        <h1 class="text-center mb-3">节日查询</h1>
        <h2 class="text-center mb-4">Calendar Search</h2>
        
        <form id="calendarForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="calendarMonth">Please Type the Month (请输入月):</label>
                <input type="text" class="form-control" wire:model.defer="month" id="calendarMonth" placeholder="例如: 12" required>
            </div>
            <div class="form-group mt-3">
                <label for="calendarDay">Please Type the Day (请输入日):</label>
                <input type="text" class="form-control" wire:model.defer="day" id="calendarDay" placeholder="例如: 25" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">查询</button>
        </form>
        
        <div id="result" class="mt-4">
            @if ($holidayName)
                <div class="alert alert-success">
                    <h4>Holiday Information</h4>
                    <p>On {{ $month }}/{{ $day }}<br>The Holiday is: {{ $holidayName }}</p>
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
