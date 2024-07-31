<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #000000;
            /* Light background color */
            color: #000000;
            /* Dark text color */
        }

        .container {
            margin-top: 20px;
            background-color:#27E9FE;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Subtle shadow for depth */
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

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <br><br>
    @yield('content')
    @livewireScripts
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        
    </div>
    

    @include('layout.footer')
    <script>
        $(document).ready(function() {
            // Automatically hide alerts after 5 seconds
            setTimeout(function() {
                $('.alert').fadeOut('slow');
            }, 5000);
        });
    </script>
    
</body>

</html>
