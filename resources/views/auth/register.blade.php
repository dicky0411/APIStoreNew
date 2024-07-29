@extends('layout.app')

@section('content')
    <div class="container" id="register">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Register</h2>
        <form action="{{ route('register.submit') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="register-email">Email address:</label>
                <input type="email" class="form-control w-100" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="register-password">Password:</label>
                <input type="password" class="form-control w-100" id="pwd" placeholder="Enter Password" name="password" required>
                @if ($errors->has('password'))
                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="register-password-confirm">Confirm Password:</label>
                <input type="password" class="form-control w-100" id="password_confirmation" placeholder="Repeat Password" name="password_confirmation" required>
                @if ($errors->has('password_confirmation'))
                    <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
