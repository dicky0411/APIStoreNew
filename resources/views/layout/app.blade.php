<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif&family=ZCOOL+QingKe+HuangYou&display=swap');

        body {
            background-color: #e8e4de; /* Light beige background */
            font-family: 'Noto Serif', serif; /* Elegant serif font */
            background-image: url('images/song_bg_pattern.jpg'); /* Traditional pattern */
            background-size: cover;
            color: #5a3e36; /* Dark text color */
        }

        .container {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* More pronounced shadow */
            border: 2px solid #d9b382; /* Bamboo-like border */
        }

        .alert {
            margin-top: 20px;
            background-color: #fff3cd;
            border-color: #ffeeba;
            color: #856404;
        }

        .navbar {
            background-color: #f8f9fa;
            color: #5a3e36;
            border-bottom: 2px solid #d9b382;
        }

        .navbar a {
            color: #5a3e36;
        }

        .card-deck .card {
            flex: 1 1 auto;
            margin-bottom: 20px;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 2px solid #d9b382;
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
        }

        .card img {
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #d9b382;
        }

        .card-body {
            flex-grow: 1;
        }

        .btn-primary {
            background-color: #6d4c41; /* Earthy brown button color */
            border-color: #6d4c41;
        }

        .btn-primary:hover {
            background-color: #5a3e36;
            border-color: #5a3e36;
        }

        .btn-secondary {
            background-color: #a67c52;
            border-color: #a67c52;
        }

        .btn-secondary:hover {
            background-color: #86664a;
            border-color: #86664a;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            border-top: 2px solid #d9b382;
        }

        h1, h2, h5 {
            font-family: 'ZCOOL QingKe HuangYou', serif; /* Traditional Chinese style font */
            color: #5a3e36; /* Darker earthy tone */
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
