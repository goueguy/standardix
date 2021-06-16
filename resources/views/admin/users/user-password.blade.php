@extends('layouts.admin')
@section('title', 'Utilisateurs')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2 card card-default">
            <div class="card-header">
                <h3 class="card-title"><span class="float-left">Mot de passe de {{$user->nom}} {{$user->prenoms}}</span></h3>
                <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                <form action="{{route('admin.users.update.password',$user->id)}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Nouveau Mot de passe</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Nouveau Mot de passe">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation">Confirmation Mot de passe</label>
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmation Mot de passe">
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Changer Mot de passe</button>
                </div>
                </form>
            </div>
            </div>
    </div>
</div>
</section>
@endsection
