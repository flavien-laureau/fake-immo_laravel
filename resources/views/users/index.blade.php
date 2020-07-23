@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Modification</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    @if (Auth::user()->role->name == "admin")
                    <h5 class="mb-3">Profil Administrateur</h5>
                    @else
                    <h5 class="mb-3">Profil utilisateur</h5>
                    @endif
                    <div class="row">
                        <div class="col-md-9">
                            <dl class="row">
                                <dt class="col-sm-3">Prénom :</dt>
                                <dd class="col-sm-9">{{ Auth::user()->firstname }}</dd>

                                <dt class="col-sm-3">Nom :</dt>
                                <dd class="col-sm-9">{{ Auth::user()->lastname }}</dd>

                                <dt class="col-sm-3">Email :</dt>
                                <dd class="col-sm-9">{{ Auth::user()->email }}</dd>

                                <dt class="col-sm-3 text-truncate">Adresse :</dt>
                                <dd class="col-sm-9">{{ Auth::user()->address->line }} à
                                    {{ Auth::user()->address->city }}</dd>
                            </dl>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="edit">
                    <form role="form" action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
                            <div class="col-lg-9">
                                <input name="firstname" class="form-control" type="text"
                                    value="{{ Auth::user()->firstname }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                            <div class="col-lg-9">
                                <input name="lastname" class="form-control" type="text"
                                    value="{{ Auth::user()->lastname }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input name="email" class="form-control" type="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                            <div class="col-lg-9">
                                <input name="line" class="form-control" type="text"
                                    value="{{ Auth::user()->address->line }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-5">
                                <input name="city" class="form-control" type="text"
                                    value="{{ Auth::user()->address->city }}">
                            </div>
                            <div class="col-lg-2">
                                <input name="postal_code" class="form-control" type="text"
                                    value="{{ Auth::user()->address->postal_code }}">
                            </div>
                            <div class="col-lg-2">
                                <input name="country" class="form-control" type="text"
                                    value="{{ Auth::user()->address->country }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Modifier la
                                photo</label>
                            <div class="custom-file col-lg-5">
                                <input type="file" name="image" class="custom-file-input" id="file-upload">
                                <label class="custom-file-label" for="file-upload" id="img-file-label">Choisir le
                                    fichier</label>
                            </div>
                            <div class="col-lg-4 p-2" id="file-upload-filename"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mot de passe</label>
                            <div class="col-lg-9">
                                <input name="password" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirmer le mot de passe</label>
                            <div class="col-lg-9">
                                <input name="confirmPassword" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <button type="submit" class="btn btn-primary">Sauvegarder les changements</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            @if (Auth::user()->image != "profil-default.jpg")
            <img src="{{ asset("/storage/img_users/" . Auth::user()->id . '/' . Auth::user()->image ) }}"
                class="mx-auto img-fluid img-circle d-block w-75" alt="avatar">
            @else
            <img src="{{ asset("/img/" . Auth::user()->image ) }}" class="mx-auto img-fluid img-circle d-block"
                alt="avatar">
            @endif
        </div>
    </div>
</div>

@endsection