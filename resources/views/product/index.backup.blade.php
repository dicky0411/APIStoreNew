<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ADD8E6; /* Light background color */
            color: #000000; /* Dark text color */
        }
        .container {
            margin-top: 20px;
        }
        .alert {
            margin-top: 20px;
        }
        .navbar {
            background-color: #f8f9fa;
            color: #000;
        }
        .navbar a {
            color: #000;
        }
        .card-deck .card {
            flex: 1 1 auto;
            margin-bottom: 20px;
        }
        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            flex-grow: 1;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">APIStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="navigateBack()">Home</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link">Logout</button>
                </form>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="navigateTo('register')">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="navigateTo('login')">Login</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>

        
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="container" id="main-content">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://geology.com/world/world-map.gif" class="card-img-top" alt="Country Info">
                <div class="card-body">
                    <h5 class="card-title">Country Info API</h5>
                    <p class="card-text">Get detailed information about countries, including demographics, economics, and more.</p>
                    <form onsubmit="redirectToJson1(event)">
                        <div class="input-group">
                            <input type="text" class="form-control" id="country-code" placeholder="Enter country code" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://5.imimg.com/data5/SELLER/Default/2021/6/PR/NL/LS/79058348/desktop-computer.jpg" class="card-img-top" alt="Region IP Info">
                <div class="card-body">
                    <h5 class="card-title">Region IP API</h5>
                    <p class="card-text">Identify the region associated with an IP address, including country, city, and ISP</p>
                    <form onsubmit="redirectToJson2(event)">
                        <div class="input-group">
                            <input type="text" class="form-control" id="region-code" placeholder="Enter ip address" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                </div>
                </div>
            </div>
        </div>
            
        <div class="col-md-4">
            <div class="card">
                <img src="https://qph.cf2.quoracdn.net/main-qimg-a32632a5d0ca56704d44573395cdcef0.webp" class="card-img-top" alt="Area Code Info">
                <div class="card-body">
                    <h5 class="card-title">Area Code API</h5>
                    <p class="card-text">Retrieve area code information for any region, including location details and timezone</p>
                    <form onsubmit="redirectToJson3(event)">
                        <div class="input-group">
                            <input type="text" class="form-control" id="area-code" placeholder="Enter area code" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>


    
    
    
    
    <!-- CYCLE THROUGH THE BACKEND API DATA --> 
<div class="container" id="main-content">
    <div class="row">
        @foreach($apis as $api)
            <div class="col-md-4">
                <div class="card">
                    <img src="https://placeholder.com/200x150" class="card-img-top" alt="API Placeholder Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $api->name }}</h5>
                        <p class="card-text">{{ $api->description }}</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text"><small class="text-muted">Last updated {{ $api->updated_at->diffForHumans() }}</small></p>
                        <a href="#" class="btn btn-primary" onclick="navigateTo('{{ strtolower($api->name) }}')">Go Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@foreach($apis as $api)
    <div class="container" id="{{ strtolower($api->name) }}" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <div class="card">
            <img src="https://placeholder.com/200x150" class="card-img-top" alt="API Placeholder Image">
            <div class="card-body">
                <h2 class="card-title">{{ $api->name }} Details</h2>
                <p class="card-text">{{ $api->detailed_description }}</p>
                <p><strong>Pricing:</strong> {{ $api->pricing }}</p>
            </div>
        </div>
    </div>
@endforeach

    
    <div class="container" id="register" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Register</h2>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="register-email">Email address:</label>
                <input type="email" class="form-control w-100" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="register-password">Password:</label>
                <input type="password" class="form-control w-100" id="pwd" placeholder="Enter Password" name="password" required>
            </div>
            <div class="form-group">
                <label for="register-password-confirm">Confirm Password:</label>
                <input type="password" class="form-control w-100" id="password_confirmation" placeholder="Repeat Password" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <div action="{{ route('login') }}" method="post "class="container" id="login" style="display:none;">
        @csrf
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="login-email">Email address:</label>
                <input type="email" class="form-control" id="login-email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password:</label>
                <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
   


    <script>
        function redirectToJson1(event) {
            event.preventDefault();
            const countryCode = document.getElementById('country-code').value;
            window.location.href = `http://127.0.0.1:8000/${countryCode}`;
    }
        function redirectToJson2(event) {
            event.preventDefault();
            const regionCode = document.getElementById('region-code').value;
            window.location.href = `http://127.0.0.1:8001/${regionCode}`;
    }
        function redirectToJson3(event) {
            event.preventDefault();
            const areaCode = document.getElementById('area-code').value;
            window.location.href = `http://127.0.0.1:8002/${areaCode}`;
    }
        function navigateTo(sectionId) {
            document.querySelectorAll('.container').forEach(container => {
                container.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
        }

        function navigateBack() {
            document.querySelectorAll('.container').forEach(container => {
                container.style.display = 'none';
            });
            document.getElementById('main-content').style.display = 'block';
            
        }
    </script>
</body>
</html>
