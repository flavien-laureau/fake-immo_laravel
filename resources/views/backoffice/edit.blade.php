@extends('layouts.backoffice')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Modification de : {{ $estate->title }}</h4>
            <p>Date d'ajout:</p>
            <p>Derniere modif:</p>
            <form method="POST" action="{{ route('admin.update', $estate->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Nom du bien</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $estate->title }}">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" class="form-control" id="type">
                        <option {{ $estate->type == "house" ? 'selected' : '' }} value="house">Maison</option>
                        <option {{ $estate->type == "apartment" ? 'selected' : '' }} value="apartment">Appartement
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <img src="/storage/img_maisons/{{ $estate->image }}" class="my-2 w-25" />
                    <input type="file" name="image" class="form-control-file" id="image">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3"
                        max-rows="6">{{ $estate->description }}</textarea>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="rooms">Nombre de pièces</label>
                        <input type="text" name="rooms" id="rooms" class="form-control" value="{{ $estate->rooms }}">
                    </div>
                    <div class="col">
                        <label for="squareMeters">Mètres carrés</label>
                        <input type="text" name="squareMeters" id="squareMeters" class="form-control"
                            value="{{ $estate->square_meters }}">
                    </div>
                    <div class="col">
                        <label for="price">Prix</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ $estate->price }}">
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success mr-3">Sauvegarder</button>
                    <a href="{{ route('admin.index') }}">
                        <button type="button" class="btn btn-secondary">Retour</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection