@extends('layouts.backoffice')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Liste des propriétés</h4>
        <div class="table-responsive">
            <button class="btn btn-primary my-3" data-toggle="modal" data-target="#estateModal">Ajouter un bien</button>
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Photo</th>
                        <th>Adresse</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Autheur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estates as $estate)
                    <tr>
                        <td>{{ $estate->title }}</td>
                        <td><img class="estate_img col-12 p-0" src="{{ "/storage/img_maisons/" . $estate->image }}"
                                alt=""></td>
                        <td>adresse</td>
                        <td>{{ $estate->description }}</td>
                        <td>{{ $estate->price }} €</td>
                        <td>{{ $estate->admin->name }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('estates.show', $estate->id) }}" class="text-body"><i
                                    class="far fa-eye"></i></a>
                            <a href="{{ route('admin.edit', $estate->id) }}" class="text-body">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.destroy', $estate->id) }}" class="text-body"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Titre</th>
                        <th>Photo</th>
                        <th>Adresse</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Autheur</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection