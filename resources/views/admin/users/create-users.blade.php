@extends('layouts.admin')
@section('title', 'Utilisateurs')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2 card card-default">
            <div class="card-header">
                <h3 class="card-title"><span class="float-left">Ajouter</span></h3>
                <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                <form action="{{route('admin.users.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Prénoms</label>
                                <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="Prénoms">
                                @error('firstname')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="password">Niveau d'accès</label>
                                <select name="role" class="form-control @error('role') is-invalid @enderror">
                                    <option value="">Sélectionner</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->nom}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse Email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe">
                                @error('password')
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
