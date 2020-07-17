@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="h2_estates">Nos biens immobiliers</h2>
    {{-- todo: filter --}}
    <section>
        @foreach ($estates as $estate)
        <div class="d-flex my-3 row">
            <figure class="m-0 p-0 col-md-6">
                <img class="img h-100 col-12 p-0" src="{{ "/storage/img_maisons/" . $estate->image }}"
                    alt="Illustration du bien" />
            </figure>
            <div class="card w-100 rounded-0 col-md-6">
                <a href="#">
                    <div class="card-body">
                        <h3>{{ $estate->title }}</h3>
                        <p>{{ $estate->description }}</p>
                        <p>Nombre de pièces: {{ $estate->rooms }}</p>
                        <p>{{ $estate->price }}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection