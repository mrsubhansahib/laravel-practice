@if (session('success'))
    <div style="color:green">
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div style="color:red">
        {{ session('error') }}
    </div>
@endif

