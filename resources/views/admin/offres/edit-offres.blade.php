@extends('layouts.admin')
@section('title', 'Editer Offres Emplois')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-12">
            @if(session('success'))
                <div class="mt-4 mb-4 text-center col-lg-12 alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title">Modifier</h3>
                </div>
                <form action="{{route('admin.offres.update',$offre->slug)}}" method="POST" onsubmit="send()">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">titre</label>
                                <input type="text" name="titre" class="form-control" value="{{$offre->titre}}">
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
                                    <option value="{{$categorie->id}}" {{$categorie->id==$offre->categorie_offre_id ? "selected":""}}>{{$categorie->categorie_offre_title}}</option>
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
                                <input type="hidden"  name="description" id="descriptionField" value="{{$offre->description_offres}}">
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lieu">Lieu</label>
                                <input type="text" name="lieu" class="form-control" value="{{$offre->lieu}}">
                                @error('lieu')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_limite">Date Limite</label>
                                <input type="text" id="datepicker" name="date_limite" class="form-control" value="{{date("d/m/Y",strtotime($offre->date_limite))}}">
                                @error('date_limite')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="profil">Profil</label>
                                <div id="profil" style="height:200px"></div>
                                <input type="hidden" name="profil" id="profilField" class="form-control" value="{{$offre->profil}}">
                                @error('profil')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="avantages">Avantages</label>
                                <div id="avantages" style="height:200px"></div>
                                <input type="hidden" id="avantagesField" name="avantages" class="form-control" value="{{$offre->avantages}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="dossier_candidature">Dossier de Candidature</label>
                                <div  id="dossier"  style="height:200px"></div>
                                <input type="hidden"  id="dossierField" name="dossier_candidature" class="@error('dossier_candidature') is-invalid @enderror" value="{{$offre->dossier_candidature}}">
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
                                <input type="text" name="duree_contrat" class="form-control" value="{{$offre->duree_contrat}}">
                                @error('duree_contrat')
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
@push('offres')
    <script src="{{asset('assets/js/quill.js')}}"></script>
    <script>
        dossier.setText(dossierField.value);
        avantages.setText(avantagesField.value);
        profil.setText(profilField.value);
        description.setText(descriptionField.value);
    </script>
@endpush
