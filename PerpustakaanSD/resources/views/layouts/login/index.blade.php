<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Admin Perpustakaan</title>
    <link rel="stylesheet" href="{{ asset('css/login-css/main.css') }}">
</head>

<body>
    <div class="wrapper">
        <form action="{{ route('login-proses') }}" method="post">
            @csrf
            <h2>Login</h2>
            <div class="input-field">
                <input type="text" value="{{ old('email') }}" name="email" required autofocus>
                <label>enter your email</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" required>
                <label>enter your password</label>
            </div>
            <br>
            <br>
            <br>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>

</html>
