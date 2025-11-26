<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
    @include('layout.header')
    <main>
        <h4>Before Yield</h4>
        @yield('content')
        <h4>After Yield</h4>

    </main>
    @include('layout.footer')
    @include('layout.foot')
</body>

</html>
