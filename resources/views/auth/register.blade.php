<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
</head>

<body>
    @include('layout.alert')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" required name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" required name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" required name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" required name="password_confirmation" required>
            @error('password')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Register</button>
    </form>
    <button onclick="window.location='{{ route('login') }}'">Login</button>
</body>

</html>
