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