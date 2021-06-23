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
                <div class="row">
                    <div class="col-lg-12">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif
                    </div>
                </div>
                <form action="{{route('admin.users.profil.update',Auth::user()->id)}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" class="form-control" value="{{Auth::user()->nom}}">
                                @error('nom')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prenoms">Prenoms</label>
                                <input type="text" name="prenoms" class="form-control" value="{{Auth::user()->prenoms}}">
                                @error('prenoms')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="tel" name="contact" class="form-control" value="{{Auth::user()->contact}}">
                                @error('contact')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="lieu_habitation">Lieu Habitation</label>
                                <input type="text" name="lieu_habitation" class="form-control" value="{{Auth::user()->lieu_habitation}}">
                                @error('lieu_habitation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="domaine_emploi_id">Domaine Emploi</label>
                                    <select name="domaine_emploi" id="domaine_emploi" class="form-control">
                                        <option value="">Sélectionner un Domaine Emploi</option>
                                        @foreach ($domaines as $domaine)
                                            <option value="{{$domaine->id}}" {{ $domaine->id==Auth::user()->domaine_emploi_id ? "selected":""}}>{{$domaine->nom}}</option>
                                        @endforeach
                                    </select>
                                    @error('domaine_emploi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="metier_id">Metier</label>
                                    <select name="metier" id="metier" class="form-control">
                                        <option value="">Sélectionner un Métier</option>
                                        @foreach ($metiers as $metier)
                                            <option value="{{$metier->id}}" {{ $metier->id==Auth::user()->metier_id ? "selected":""}}>{{$metier->nom_metier}}</option>
                                        @endforeach
                                    </select>
                                    @error('metier')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="motivation">Motivation</label>
                                <input type="text" name="motivation" class="form-control" value="{{Auth::user()->motivation}}">
                                @error('motivation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
