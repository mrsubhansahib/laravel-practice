@extends('layout.master')
@section('content')
    @include('layout.alert')
    <h1>User Product List</h1>

    <button onclick="window.location.href='{{ route('user_products.create') }}'">Create User Product</button>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Product </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userProducts as $userProduct)
                <tr>
                    <td>{{ $userProduct->user->name }}</td>
                    <td>{{ $userProduct->product->name }}</td>
                    <td>
                        <a href="{{ route('user_products.edit', $userProduct->id) }}">Edit</a>
                        <form action="{{ route('user_products.destroy', $userProduct->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection