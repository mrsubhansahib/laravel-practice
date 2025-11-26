@extends('layout.master')
@section('content')
@include('layout.alert')
<h1>Create User Product</h1>
    <form action="{{ route('user_products.store') }}" method="POST" class="mb-10">
        @csrf
        <div class="">
            <label for="user_id">
                User
            </label>
            <select name="user_id" id="user_id" required>
                <option value="" selected disabled>Select User</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}</option>
                @endforeach
            </select>
            @error('user_id')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="product_id">
                Product
            </label>
            <select name="product_id" id="product_id" required>
                <option value="" selected disabled>Select Product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                        {{ $product->name }}</option>
                @endforeach
            </select>
            @error('product_id')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div class="">
            <button>Submit</button>
        </div>
    </form>
@endsection