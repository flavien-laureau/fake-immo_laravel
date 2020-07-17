<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset("/img/logo.jpg") }}" alt="logo"
                class="w-50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto text-uppercase">
                <li class="nav-item mx-2{{-- active --}}">
                    <a class="nav-link text-body"
                        href="{{ route('index') }}">Accueil{{-- <span class="sr-only">(current)</span> --}}</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-body" href="#">Fake-immo</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-body" href="{{ route('estates.index') }}">Acheter</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-body" href="#">Nous contacter</a>
                </li>
                <li class="nav-item dropdown">
                    <p class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        User(tempo)
                    </p>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">login</a>
                        <a class="dropdown-item" href="{{ route('backoffice.index') }}">Panel</a>
                        <a class="dropdown-item" href="{{ route('register') }}">register</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Déco</a>
                        @if (Auth::user())
                        <p class="dropdown-item">{{ Auth::user()->name }}</p>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="banner mx-auto mt-4 col-12">

</div>