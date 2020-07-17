@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body text-center">
            <h2 class="card-title">{{ $estate->title }}</h2>
            <img src="{{'/storage/img_maisons/'.$estate->image}}" class="w-50" />
            <p>{{ $estate->description }}</p>
            <p>{{ $estate->price }}€</p>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('estates.index') }}">
                <button class="btn btn-primary">Retour</button>
            </a>
        </div>
    </div>
</div>
@endsection