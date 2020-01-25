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

    @if(session('success'))
        <div class="container mt-2 mb-2">
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        </div>
    @endif
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
