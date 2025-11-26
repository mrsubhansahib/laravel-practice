@extends('layout.master')
@section('content')
    <div class="">
        @session('success')
            <p style="color:green">{{ session('success') }}</p>
        @endsession
    </div>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST" class="mb-10">
        @csrf
        <div class="">
            <label for="name">
                Name
            </label>
            <input type="text" required name="name" value="{{ old('name') }}" id="name">
            @error('name')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="price">
                Price
            </label>
            <input type="number" required name="price" value="{{ old('price') }}" id="price">
            @error('price')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="description">
                Description
            </label>
            <textarea required name="description" id="description">{{ old('description') }}</textarea>
            @error('description')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
 

        <div class="">
            <button>Submit</button>
        </div>
    </form>
@endsection
