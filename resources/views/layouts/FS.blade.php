<!-- resources/views/layouts/app.blade.php -->

<html>

<head>
    <title>App Name - @yield('title')</title>
</head>

<body>
    <div>
        <span>
            <a href="{{ route('hotels.1f') }}">1F</a></span>
        <span>
            <a href="{{ route('hotels.2f') }}">2F</a></span>
        <span>
            <a href="{{ route('hotels.3f') }}">3F</a></span>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="h">
        <a href="{{ route('hotels.index') }}">回首頁</a>
    </div>
</body>

</html>
