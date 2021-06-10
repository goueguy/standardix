@extends('layouts.admin')
@section('title', 'Rendez-vous')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        @if(session("success"))
            <span class="p-2 text-center alert alert-success">{{session("success")}}</span>
        @endif
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title"><span class="float-left">Ajouter</span></h3>
                <span class="float-right"><a href="{{route('admin.candidatures.list')}}">Retour</a></span>
                </div>
                <form action="{{route('candidatures.rendezvous.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="objet">Objet</label>
                                <input type="text" name="objet" class="form-control @error('objet') is-invalid @enderror"  placeholder="Nouveau Objet" value="{{old('objet')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" name="label" class="form-control @error('label') is-invalid @enderror" placeholder="Entrez label" value="{{old('label')}}">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contenu">Contenu</label>
                                <textarea  cols="25" rows="10" name="contenu" class="form-control @error('contenu') is-invalid @enderror"  placeholder="Nouveau le Contenu" value="{{old('contenu')}}"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_rendez_vous ">Date de Rendez Vous </label>
                                <input type="date" name="date_rendez_vous" class="form-control @error('date_rendez_vous') is-invalid @enderror " value="{{old('date_rendez_vous')}}">
                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="candidats">Les Candidats</label>
                                <select name="candidats[]" id="candidats" class="form-control @error('candidats') is-invalid @enderror " multiple>
                                        <option value=""></option>
                                        @foreach ($candidats as $candidat)
                                        <option value="{{$candidat->user_id}}" selected>{{$candidat->name.' '.$candidat->firstname}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="candidats">Les Offres</label>
                                <select name="offres" id="" class="form-control @error('offres') is-invalid @enderror">
                                        <option value="0">Sélectionner</option>
                                        @foreach ($offres as $offre)
                                        {{-- <option value="{{$offre->id}}" {{(in_array($offre->id,$allOffreCandidatId)) ? "selected":""}}>{{$offre->titre}}</option> --}}
                                        <option value="{{$offre->id}}">{{$offre->titre}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Envoyer Rendez-Vous</button>
                </div>
                </form>
            </div>
            </div>
    </div>
</div>
</section>
@endsection
