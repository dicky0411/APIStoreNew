<div>
    <br>
    <div class="container mt-5">
        <h1 class="text-center">Covid19 Total Positives Per State</h1>

        <form id="covidForm" class="mt-4" wire:submit.prevent="search">
            <div class ="form-group">
                <label for="year">Year:</label>
                <select name="year" id="year" wire:model.defer="year">
                    <option value="">Select Year</option>
                    <option value = "2020">2020</option>
                    <option value = "2021">2021</option>
                </select><br>
                <label for="month">Month:</label>
                <select name="month" id="month" wire:model.defer="month">
                    <option value="">Select Month</option>
                    <option value = "01">January/一月</option>
                    <option value = "02">Febuary/二月</option>
                    <option value = "03">March/三月</option>
                    <option value = "04">April/四月</option>
                    <option value = "05">May/五月</option>
                    <option value = "06">June/六月</option>
                    <option value = "07">July/七月</option>
                    <option value = "08">August/八月</option>
                    <option value = "09">September/九月</option>
                    <option value = "10">October/十月</option>
                    <option value = "11">November/十一月</option>
                    <option value = "12">December/十二月</option>
                </select><br>
                <label for="day">Day:</label>
                <select name="day" id="day" wire:model.defer="day" >
                    <option value="">Select Day</option>   
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <br>
                <label for="state">State:</label>
                <select name="state" id="state" wire:model.defer="state" class="form-control" style="max-width: 150px;">
                    <option value="">Select State</option>
                    <option value="al">Alabama</option>
                    <option value="ak">Alaska</option>
                    <option value="az">Arizona</option>
                    <option value="ar">Arkansas</option>
                    <option value="ca">California</option>
                    <option value="co">Colorado</option>
                    <option value="ct">Connecticut</option>
                    <option value="de">Delaware</option>
                    <option value="fl">Florida</option>
                    <option value="ga">Georgia</option>
                    <option value="hi">Hawaii</option>
                    <option value="id">Idaho</option>
                    <option value="il">Illinois</option>
                    <option value="in">Indiana</option>
                    <option value="ia">Iowa</option>
                    <option value="ks">Kansas</option>
                    <option value="ky">Kentucky</option>
                    <option value="la">Louisiana</option>
                    <option value="me">Maine</option>
                    <option value="md">Maryland</option>
                    <option value="ma">Massachusetts</option>
                    <option value="mi">Michigan</option>
                    <option value="mn">Minnesota</option>
                    <option value="ms">Mississippi</option>
                    <option value="mo">Missouri</option>
                    <option value="mt">Montana</option>
                    <option value="ne">Nebraska</option>
                    <option value="nv">Nevada</option>
                    <option value="nh">New Hampshire</option>
                    <option value="nj">New Jersey</option>
                    <option value="nm">New Mexico</option>
                    <option value="ny">New York</option>
                    <option value="nc">North Carolina</option>
                    <option value="nd">North Dakota</option>
                    <option value="oh">Ohio</option>
                    <option value="ok">Oklahoma</option>
                    <option value="or">Oregon</option>
                    <option value="pa">Pennsylvania</option>
                    <option value="ri">Rhode Island</option>
                    <option value="sc">South Carolina</option>
                    <option value="sd">South Dakota</option>
                    <option value="tn">Tennessee</option>
                    <option value="tx">Texas</option>
                    <option value="ut">Utah</option>
                    <option value="vt">Vermont</option>
                    <option value="va">Virginia</option>
                    <option value="wa">Washington</option>
                    <option value="wv">West Virginia</option>
                    <option value="wi">Wisconsin</option>
                    <option value="wy">Wyoming</option>
                </select>

                
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询/submit</button>
        </form>

        <div id="result" class="mt-4">
            @if ($positive)
                <div class="alert alert-success">
                    On {{$day}}/{{$month}} in {{$year}} <br>
                    There were {{$positive}} Cases of Coronavirus in the State of {{$state}}
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