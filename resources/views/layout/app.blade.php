<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&family=Merriweather:wght@400;700&display=swap'); /* Vintage and classic fonts */

        body {
            background-color: #f0e6d6; /* Vintage parchment color */
            font-family: 'Special Elite', cursive; /* Vintage typewriter font for primary text */
            background-image: url('images/vintage_bg_pattern.jpg'); /* Vintage pattern */
            background-size: cover;
            color: #5d4037; /* Dark vintage text color */
        }

        .container {
            margin-top: 20px;
            background-color: rgba(250, 235, 215, 0.9); /* Slightly transparent parchment background */
            padding: 20px;
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Pronounced shadow */
            border: 3px solid #b08968; /* Vintage border color */
        }

        .alert-success {
            background-color: #d4edda; /* Light green background for success alerts */
            border-color: #c3e6cb; /* Matching border color */
            color: #155724; /* Dark green text color */
            font-family: 'Merriweather', serif; /* Classic serif font for alerts */
            border-radius: 8px; /* Rounded corners */
            padding: 15px; /* Padding inside the alert */
        }

        .alert-danger {
            background-color: #f8d7da; /* Light vintage red for error alerts */
            border-color: #f5c6cb; /* Matching border color */
            color: #721c24; /* Dark vintage text color for error alerts */
            font-family: 'Merriweather', serif; /* Classic serif font for alerts */
            border-radius: 8px; /* Rounded corners */
            padding: 15px; /* Padding inside the alert */
        }

        .navbar {
            background-color: #f8f9fa;
            color: #5d4037; /* Dark vintage color */
            border-bottom: 3px solid #b08968; /* Vintage border color */
        }

        .navbar a {
            color: #5d4037; /* Vintage link color */
            font-family: 'Merriweather', serif; /* Classic serif font for links */
        }

        .card-deck .card {
            flex: 1 1 auto;
            margin-bottom: 20px;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 2px solid #b08968; /* Vintage border color */
            background-color: rgba(250, 235, 215, 0.9); /* Slightly transparent vintage background */
            font-family: 'Merriweather', serif; /* Classic serif font for card text */
        }

        .card img {
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #b08968; /* Vintage border color */
        }

        .card-body {
            flex-grow: 1;
            font-family: 'Merriweather', serif; /* Classic serif font for card body */
        }

        .card-title {
            font-family: 'Special Elite', cursive; /* Vintage typewriter font for titles */
            color: #5d4037; /* Dark vintage text color */
            font-size: 1.5rem; /* Larger font size for emphasis */
            margin-bottom: 0.5rem;
        }

        .card-text {
            font-family: 'Merriweather', serif; /* Classic serif font for text */
            color: #6f4e28; /* Medium brown text */
            font-size: 1rem;
            line-height: 1.5;
        }

        .btn-primary {
            background-color: #8d6e63; /* Earthy brown button color */
            border-color: #8d6e63; /* Matching border color */
            font-family: 'Merriweather', serif; /* Classic serif font for button text */
        }

        .btn-primary:hover {
            background-color: #6d4c41; /* Darker vintage button color */
            border-color: #6d4c41; /* Matching border color */
        }

        .btn-secondary {
            background-color: #a67c52; /* Earthy vintage button color */
            border-color: #a67c52; /* Matching border color */
        }

        .btn-secondary:hover {
            background-color: #86664a; /* Darker vintage button color */
            border-color: #86664a; /* Matching border color */
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            border-top: 3px solid #b08968; /* Vintage border color */
        }

        h1, h2, h5 {
            font-family: 'Special Elite', cursive; /* Vintage typewriter font */
            color: #5d4037; /* Dark vintage text color */
        }

        h1 {
            font-size: 2.5rem; /* Larger font size for main headings */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Subtle text shadow for a classic look */
        }

        h2 {
            font-size: 2rem; /* Slightly smaller font size for subheadings */
        }

        h5 {
            font-size: 1.25rem; /* Font size for smaller headings */
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
