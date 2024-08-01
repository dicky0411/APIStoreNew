<div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Translate Hello to Different Languages</h1>

        <form id="covidForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="year">Language:</label>
                <select name="year" id="language" wire:model.defer="language" class="form-control">
                    <option value="">Select Language</option>
                    <option value="ar">Arabic</option>
                    <option value="az">Azeri</option>
                    <option value="be">Belarusian</option>
                    <option value="bg">Bulgarian</option>
                    <option value="bs">Bosnian</option>
                    <option value="cs">Czech</option>
                    <option value="da">Danish</option>
                    <option value="de">German</option>
                    <option value="el">Greek</option>
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="et">Estonian</option>
                    <option value="fa">Farsi</option>
                    <option value="fi">Finnish</option>
                    <option value="fr">French</option>
                    <option value="he">Hebrew</option>
                    <option value="hi">Hindi</option>
                    <option value="hr">Croatian</option>
                    <option value="hu">Hungarian</option>
                    <option value="hy">Armenian</option>
                    <option value="id">Indonesian</option>
                    <option value="is">Icelandic</option>
                    <option value="it">Italian</option>
                    <option value="ja">Japanese</option>
                    <option value="ka">Georgian</option>
                    <option value="kk">Kazakh</option>
                    <option value="ko">Korean</option>
                    <option value="lt">Lithuanian</option>
                    <option value="lv">Latvian</option>
                    <option value="mk">Macedonian</option>
                    <option value="mn">Mongolian</option>
                    <option value="ms">Malay</option>
                    <option value="no">Norwegian</option>
                    <option value="pl">Polish</option>
                    <option value="pt">Portuguese</option>
                    <option value="ro">Romanian</option>
                    <option value="ru">Russian</option>
                    <option value="sk">Slovak</option>
                    <option value="sl">Slovenian</option>
                    <option value="sq">Albanian</option>
                    <option value="sr">Serbian</option>
                    <option value="sv">Swedish</option>
                    <option value="sw">Swahili</option>
                    <option value="th">Thai</option>
                    <option value="uk">Ukrainian</option>
                    <option value="vi">Vietnamese</option>
                    <option value="zh">Chinese</option>
                   
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">查询/Submit</button>
        </form>

        <div id="result" class="mt-4">
            @if ($hello)
                <div class="alert alert-success">
                    in <strong>{{$language}}</strong>, Hello is said as <strong>{{$hello}}</strong>
            @endif

            @if ($errorMessage)
                <div class="alert alert-danger">
                    {{ $errorMessage }}
                </div>
            @endif
        </div>
    </div>
</div>
