@extends('layout.master')
@section('content')
    <h1>Edit Product Info</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="">
            <label for="name">
                Name
            </label>
            <input type="text" required name="name" value="{{ $product->name }}" id="name">
            @error('name')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="price">
                Price
            </label>
            <input type="text" required name="price" value="{{ $product->price }}" id="price">
            @error('price')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="description">
                Description
            </label>
            <textarea required name="description" id="description">{{ $product->description }}</textarea>
            @error('description')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div class="">
            <button>Submit</button>
        </div>
    </form>
@endsection
