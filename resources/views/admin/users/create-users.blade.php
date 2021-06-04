@extends('layouts.admin')
@section('title', 'Utilisateurs')

@section('content')
<section class="content">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default mt-2">
                  <div class="card-header">
                    <h3 class="card-title"><span class="float-left">Ajouter</span></h3>
                    <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                  </div>
                  <form action="#" method="POST">
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
                                        <option value="">Sélectionner Niveau</option>
                                        @foreach ($users as $user)
                                            <option value="{{$user->niveau_acces}}">{{$user->niveau_acces}}</option>
                                        @endforeach
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
