@extends('layout.master')

@section('content')



<h1>Welcome to my Application</h1>


@endsection
@push('custom-scripts')
    <script>
        document.getElementById('registerationForm').addEventListener('submit', function() {
            alert('Form is being submitted!');
        });
    </script>
@endpush
@push('custom-styles')
    <style>
        a{
            font-size: 25px
        }
    </style>
@endpush
