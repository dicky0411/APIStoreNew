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