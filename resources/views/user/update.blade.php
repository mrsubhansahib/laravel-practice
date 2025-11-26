@extends('layout.master')
@section('content')
    <h1>Edit User Info</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Update User</button>
        </div>
    </form>
    
@endsection
