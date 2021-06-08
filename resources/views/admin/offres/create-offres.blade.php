@extends('layouts.admin')
@section('title', 'Offres Emplois')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        @if(session('success'))
            <div class="mt-4 mb-4 text-center col-lg-12 alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title">Ajouter</h3>
                </div>
                <form action="{{route('admin.offres.store')}}" method="POST" onsubmit="send()">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">titre</label>
                                <input type="text" name="titre" class="form-control" value="{{old('titre')}}">
                                @error('titre')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categorie_offre">Categorie de l'Offre</label>
                                <select name="categorie_offre" class="form-control">
                                    <option value=""></option>
                                    @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->categorie_offre_title}}</option>
                                    @endforeach
                                </select>
                                @error('categorie_offre')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_offre">Description de l'Offre</label>
                                <div  id="description"  style="height:200px"></div>
                                <input type="hidden"  name="description" id="descriptionField">
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lieu">Lieu</label>
                                <input type="text" name="lieu" class="form-control" value="{{old('lieu')}}">
                                @error('lieu')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_limite">Date Limite</label>
                                <input type="text" id="datepicker" name="date_limite" class="form-control" value="{{old('date')}}">
                                @error('date_limite')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="profil">Profil</label>
                                <div id="profil" style="height:200px"></div>
                                <input type="hidden" name="profil" id="profilField" class="form-control" value="{{old('profil')}}">
                                @error('profil')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="avantages">Avantages</label>
                                <div id="avantages" style="height:200px"></div>
                                <input type="hidden" id="avantagesField" name="avantages" class="form-control" value="{{old('avantages')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="dossier_candidature">Dossier de Candidature</label>
                                <div  id="dossier"  style="height:200px"></div>
                                <input type="hidden"  id="dossierField" name="dossier_candidature" class="@error('dossier_candidature') is-invalid @enderror">
                                @error('dossier_candidature')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="duree_contrat">Durée du Contrat</label>
                                <input type="text" name="duree_contrat" class="form-control" value="{{old('duree_contrat')}}">
                                @error('duree_contrat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
                </form>
            </div>
            </div>
    </div>
</div>
</section>
@endsection
@push('offres')
    <script src="{{asset('assets/js/quill.js')}}"></script>
@endpush
