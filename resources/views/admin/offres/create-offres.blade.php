@extends('layouts.admin')
@section('title', 'Offres Emplois')

@section('content')
<section class="content">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-2 card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Ajouter</h3>
                  </div>
                  <form action="#" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">titre</label>
                                    <input type="text" name="titre" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date_limite">Date Limite</label>
                                    <input type="date" name="date_limite" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lieu">Lieu</label>
                                    <input type="text" name="lieu" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="categories_offres">Categories Offres</label>
                                    <select name="categories_offres" class="form-control">
                                        @foreach ( $categories as $categorie  )
                                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="duree_contrat">Durée Du Contrat</label>
                                    <input type="text" name="duree_contrat" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mission">Mission</label>
                                    <input type="text" name="mission" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="profile">Profile</label>
                                    <input type="text" name="profile" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="avantage">Avantage</label>
                                    <input type="text" name="avantage" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dossier_candidature">Dossier De Candidature</label>
                                    <input type="text" name="dossier_candidature" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="description_offre">Descriptio De Offre</label>
                                    <input type="text" name="description_offre" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="description_offre">User</label>
                                    <select name="categories_offres" class="form-control">
                                        @foreach ( $categories as $categorie  )
                                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="password">Niveau d'accès</label>
                                    <select name="niveau_acces" class="form-control">
                                        <option value="0">Utilisateur</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Super Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control">
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
