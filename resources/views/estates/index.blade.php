@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="h2_estates">Nos biens immobiliers</h2>
    {{-- todo: filter --}}
    <section>
        @foreach ($estates as $estate)
        <div class="d-flex my-3 row">
            <figure class="m-0 p-0 col-md-6">
                <img class="img h-100 col-12 p-0" src="{{ "/storage/img_estates/" . $estate->image }}"
                    alt="Illustration du bien" />
            </figure>
            <div class="card w-100 rounded-0 col-md-6">
                <a href="{{ route('estates.show', $estate->id) }}" class="text-body">
                    <div class="card-body ">
                        <h3>{{ $estate->title }}</h3>
                        <p>{{ $estate->description }}</p>
                        <p>Nombre de pièces: {{ $estate->rooms }}</p>
                        <p>{{ $estate->price }}</p>
                    </div>
                </a>
                @if (Auth::user())
                <div class="card-body">
                    <p>
                        @if (count($selected) != 0)
                        @foreach ($selected as $key => $item)
                        @if ($item->estate_id == $estate->id)
                        <a href="{{ route('customer.unselect', $estate->id) }}"><i
                                class="fas fa-heart fa-2x text-body"></i></a>
                        @break;
                        @endif
                        @if (count($selected) == $key+1 && $item->estate_id != $estate->id)
                        <a href="{{ route('customer.select', $estate->id) }}"><i
                                class="far fa-heart fa-2x text-body"></i></a>
                        @endif
                        @endforeach
                        @else
                        <a href="{{ route('customer.select', $estate->id) }}"><i
                                class="far fa-heart fa-2x text-body"></i></a>
                        @endif


                        Ma sélection
                    </p>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection