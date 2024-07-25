<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ADD8E6;
            /* Light background color */
            color: #000000;
            /* Dark text color */
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


    @if (session('success'))
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
        homepage

        <a href="{{ route('products.index') }}">products</a>
    </div>
</body>

</html>
