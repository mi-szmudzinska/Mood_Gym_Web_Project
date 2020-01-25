<nav class="navbar navbar-expand-md navbar-main navbar-admin">
    <div class="container container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <a href="{{route('home')}}" class="logo">
                <img class="img-fluid" src="{{asset('img/logowhite.png')}}" alt="Logo">
            </a>
            @if(Auth::user())
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off mr-2"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @if(Auth::user()->role === 'admin')
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('admin.products.index') }}">
                                <i class="fa fa-tachometer mr-2"></i>
                                Panel Amdina
                            </a>
                        </li>
                    @endif
                </ul>

                <div class="navbar-center">
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.products.index')}}"><i class="fa fa-shopping-cart mr-2"></i> Produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.categories.index')}}"><i class="fa fa-list-ul mr-2"></i>Kategorie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.orders.status')}}"><i class="fa fa-list-ul mr-2"></i>Status zamówień</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.orders.index')}}"><i class="fa fa-user mr-2"></i>Zamówienia</a>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</nav>
