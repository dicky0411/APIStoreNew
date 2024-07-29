@extends('layout.app')

@section('content')
    <div class="container" id="login">
        <h2>Login</h2>
        <form action="{{ route('login.submit') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="login-email">Email address:</label>
                <input type="email" class="form-control" id="login-email" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="login-password">Password:</label>
                <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter password" required>
                @if ($errors->has('password'))
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
