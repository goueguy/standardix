@extends('layouts.admin')
@section('title', 'Parametre')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title"><span class="float-left">Profil</span></h3>
                <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                <form action="#" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" class="form-control">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prenoms">Prenoms</label>
                                <input type="text" name="prenoms" class="form-control">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" class="form-control">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role_id">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="">Sélectionner un Rôle</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lieu_habitation">Lieu Habitation</label>
                                <input type="text" name="lieu_habitation" class="form-control">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="domaine_emploi_id">Domaine Emploi</label>
                                    <select name="domaine_emploi" id="domaine_emploi" class="form-control">
                                        <option value="">Sélectionner un Domaine Emploi</option>
                                        @foreach ($domaines as $domaine)
                                            <option value="{{$domaine->id}}">{{$domaine->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="metier_id">Metier</label>
                                    <select name="metier" id="metier" class="form-control">
                                        <option value="">Sélectionner un Métier</option>
                                        @foreach ($metiers as $metier)
                                            <option value="{{$metier->id}}">{{$metier->nom_metier}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="motivation">Motivation</label>
                                <input type="text" name="motivation" class="form-control">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
                </form>
            </div>
            </div>
    </div>
</div>
</section>
@endsection
