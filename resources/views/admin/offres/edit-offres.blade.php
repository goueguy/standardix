@extends('layouts.admin')
@section('title', 'Offres Emplois')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title">Modifier</h3>
                </div>
                <form action="#" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">titre</label>
                                <input type="text" name="titre" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categorie_offre">Categorie de l'Offre</label>
                                <select name="categorie_offre" class="form-control">
                                    @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description_offre">Description de l'Offre</label>
                                <div  id="description"  style="height:200px"></div>
                                <input type="hidden"  name="description">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lieu">Lieu</label>
                                <input type="text" name="lieu" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_limite">Date Limite</label>
                                <input type="date" name="date_limite" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="mission">Mission</label>
                                <div  id="mission"  style="height:200px"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="profil">Profil</label>
                                <div id="profil" style="height:200px"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="avantages">Avantages</label>
                                <div id="avantages" style="height:200px"></div>
                                <input type="hidden" name="avantages" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="dossier_candidature">Dossier de Candidature</label>
                                <div  id="dossier" style="height:200px"></div>
                                <input type="hidden"  name="dossier_candidature">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="niveau_acces">Niveau d'accès</label>
                                <select name="niveau_acces" class="form-control">
                                    <option value="">Sélectionner Niveau</option>
                                    <option value="0">Utilisateur</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Super Admin</option>
                                </select>
                            </div>
                            <input type="hidden"  name="niveau_acces">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="duree_contrat">Durée du Contrat</label>
                                <input type="text" name="duree_contrat" class="form-control">
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
    <script>
        let toolbarOptions = [
            ['bold','italic','underline','strike'],
            [{'header':1},{'header':2}],
            [{'list':'ordered'},{'list':'bullet'}],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'font': [] }],
            [{ 'align': [] }]];

        let quill;
        let inputs = ["#mission","#profil","#avantages","#dossier","#description"];
        for(let i = 0; i<=inputs.length; i++){
                quill= new Quill(inputs[i], {
                theme: 'snow',
                modules:{
                    toolbar:toolbarOptions
                }
            });
        }

    </script>
@endpush
