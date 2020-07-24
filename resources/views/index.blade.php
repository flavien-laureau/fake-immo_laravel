@extends('layouts.app')

@section('content')
<section class="slogan container text-center">
    <p>Fake-immo, fausse agence immobilière, site web à but démonstratif !</p>
</section>

<section class="estimate container col-12 py-4 text-center">
    <p>Fake-immo vous propose une estimation gratuite et sans engagement</p>
    <a href="#">
        <button class="btn btn-success">Contactez-nous !</button>
    </a>
</section>

<section class="sample mt-5">
    <ul class="row p-0">
        @foreach ($estates as $estate)
        <li class="list col-lg-2_4 p-0 text-center text-white">
            <figure class="position-relative m-0 h-100">
                <div class="h-100">
                    <img class="w-100 h-100" src="{{ "/storage/img_estates/" . $estate->image }}" />
                </div>

                <figcaption id="figcaption" class="position-absolute text-center pt-3 w-100 h-100">
                    @if ($estate->type == 'house')
                    <h3 class="type">Maison</h3>
                    @elseif ($estate->type == 'apartment')
                    <h3 class="type">Appartement</h3>
                    @endif
                    <h3 class="text-nowrap mt-2">{{ $estate->square_meters }} m² - {{ $estate->rooms }} pièces</h3>
                    <p class="city">Une adresse</p>
                    <p class="text-nowrap mt-2">{{ $estate->price }} €</p>
                    <a href="{{ route('estates.show', $estate->id) }}">
                        <button id="btn-more" class="btn btn-outline-light px-4">En savoir +</button>
                    </a>
                </figcaption>
            </figure>
        </li>
        @endforeach
    </ul>
</section>

<section class="reviews container mt-5">
    <h2>Témoignages</h2>
    <h3>Ce que nos clients disent de nous</h3>
    <hr />
    <div class="reviews-wrapper">
        <div class="review-1">
            <div class="review-body">
                <div class="review-profile">
                    <div class="review-avatar">
                        <img src="{{ asset('/img/client-1.jpg') }}" alt="Agence Bréville Immobilier Cabourg" />
                    </div>
                    <h4 class="name">Léa VARON</h4>
                    <div class="location">Dijon</div>
                </div>

                <div class="review-quote shadow-lg">
                    <p>Juste deux mots : professionnels et compétents !&nbsp;À la recherche d’un bien sur Dijon,
                        l’équipe de l’agence a su être à l’écoute de ma demande et a trouvé l’appartement qui me
                        correspond. Je ne pouvais espérer mieux. Encore merci à eux.</p>
                    <div class="swp-content-locator"></div>
                </div>
            </div>
        </div>

        <div class="review-2">
            <div class="review-body">
                <div class="review-profile">
                    <div class="review-avatar">
                        <img src="{{ asset('/img/client-2.jpg') }}" alt="Agence Bréville Immobilier Cabourg" />
                    </div>
                    <h4 class="name">Patrick PERIN</h4>
                    <div class="location">Plombières-lès-Dijon</div>
                </div>

                <div class="review-quote shadow-lg">
                    <p>Je recommande l’agence Fake-immo. Pour notre projet immobilier, notre conseiller a bien cerné
                        notre demande. Il nous a bien informés sur la maison que nous avons visitée ensemble. La maison
                        a été correctement négociée afin que nous l’achetions au prix du marché. Si je devais refaire
                        une transaction, je n’hésiterai pas à m’adresser à cette agence pour son professionnalisme.</p>
                    <div class="swp-content-locator"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info container col-12 py-4 text-center">
    <h2>Informations</h2>
    <div class="d-flex justify-content-center mt-4">
        <p class="col-lg-8">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatum ea ex doloribus aliquid iste quia
            atque placeat tenetur asperiores maxime at optio, voluptate saepe eius error, harum fuga architecto!
            Maiores excepturi dolor repudiandae eveniet. Vel, distinctio vero. Est adipisci fuga perspiciatis, rem
            architecto iste saepe tenetur commodi molestias sint nemo ipsum modi dignissimos molestiae, dolore eveniet
            quasi
            necessitatibus obcaecati?
            Laudantium amet vero fuga, labore accusantium hic, ducimus corporis earum in veritatis, ea rem quia sequi?
            Tempore asperiores, optio facilis aliquam maiores saepe illo obcaecati nostrum, ratione dolor mollitia
            reprehenderit.
        </p>
    </div>

</section>

<section class="socials container col-12 py-4 text-center">
    <p>Suivez-nous sur les réseaux</p>
    <img class="socials-icons" src="{{ asset('/img/facebook.png') }}" alt="facebook" />
    <img class="socials-icons" src="{{ asset('/img/instagram.png') }}" alt="instagram" />
    <img class="socials-icons" src="{{ asset('/img/twitter.png') }}" alt="twitter" />
</section>

<script>
    const figcaption = document.querySelectorAll("#figcaption");
    figcaption.forEach(elt => {
        elt.addEventListener("mouseover", () => {
            let child = elt.children;
            child[0].style.opacity = "0";
            child[1].style.opacity = "0";
            child[2].style.opacity = "0";
            child[3].style.opacity = "0";
            child[4].children[0].style.transform = "translate(0, -100%)";
        });
        elt.addEventListener("mouseout", () => {
            let child = elt.children;
            child[0].style.opacity = "1";
            child[1].style.opacity = "1";
            child[2].style.opacity = "1";
            child[3].style.opacity = "1";
            child[4].children[0].style.transform = "translate(0, 0)";
        });
    });
</script>
@endsection