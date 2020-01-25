<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        @if(Auth::user() && Auth::user()->role === 'admin')
            @include('includes.navbar-admin')
        @else
            @include('includes.navbar')
        @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
