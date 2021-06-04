@extends('layouts.admin')
@section('title', 'Utilisateur')

@section('content')
<section class="content">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default mt-2">
                  <div class="card-header">
                    <h3 class="card-title"><span class="float-left"> Utilisateurs de keita</span></h3>
                    <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" name="name" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Prénoms</label>
                                    <input type="text" name="firstname" class="form-control">
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
                    </div>
                </div>
              </div>
        </div>
    </div>
</section>

@endsection
