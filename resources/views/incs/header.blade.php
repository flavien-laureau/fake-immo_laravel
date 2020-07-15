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
                    <a class="nav-link text-body" href="#">Acheter</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-body" href="#">Nous contacter</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-body" href="#">Auth(tempo)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="banner mx-auto mt-4 col-12">

</div>