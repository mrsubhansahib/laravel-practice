@extends('layout.master')
@section('content')
    <div class="">
        @session('success')
            <p style="color:green">{{ session('success') }}</p>
        @endsession
    </div>
    <h1>User Registration</h1>
    <form action="{{ route('users.store') }}" method="POST" id="registerationForm" class="mb-10">
        @csrf
        <div class="">
            <label for="name">
                Name
            </label>
            <input type="text" required name="name" id="name">
            @error('name')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="email">
                Email
            </label>
            <input type="email" required name="email" id="email">
            @error('email')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="age">
                Age
            </label>
            <input type="date" required name="age" id="age">
            @error('age')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="password">Password</label>
            <input type="password" required name="password" id="password">
            @error('password')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
    </form>
    <div class="">
        <button type="submit" form="registerationForm">Submit</button>
    </div>
@endsection
