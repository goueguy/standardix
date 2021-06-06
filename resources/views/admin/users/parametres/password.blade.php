@extends('layouts.admin')
@section('title', 'Mot de Passe')


@section('content')
<section class="content">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default mt-2">
                  <div class="card-header">
                    <h3 class="card-title"><span class="float-left">Modification de Mot de Passe</span></h3>
                    <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                  </div>
                  <form action="#" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Mot de Passe</label>
                                    <input type="password" name="password" class="form-control">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="confirmation_password">Confirmation de Mot Passe</label>
                                    <input type="password" name="confirmation_password" class="form-control">
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
