<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
</head>
<body>
<div class="login-container">
    <h1>Admin Login</h1>
    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif
    <form action="{{ route('admin.login.submit') }}" method="POST" autocomplete="off">
        @csrf
        <input type="email" name="email" placeholder="Admin Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
