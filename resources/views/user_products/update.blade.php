@extends('layout.master')
@section('content')

@include('layout.alert')
<h1>Update User Product</h1>
    <form action="{{ route('user_products.update', $userProduct->id) }}" method="POST" class="mb-10">
        @csrf
        @method('PUT')
        <div class="">
            <label for="user_id">
                User
            </label>
            <select name="user_id" id="user_id" required>
                <option value="" disabled>Select User</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $userProduct->user_id == $user->id ? 'selected' : '' }}>
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
                <option value="" disabled>Select Product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ $userProduct->product_id == $product->id ? 'selected' : '' }}>
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