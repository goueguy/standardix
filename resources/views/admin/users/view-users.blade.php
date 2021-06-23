@extends('layouts.admin')
@section('title', 'Utilisateurs')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2 card card-default">
            <div class="card-header">
                <h3 class="card-title"><span class="float-left">Détail</span></h3>
                <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="name" class="form-control" placeholder="Nom" value="{{old('nom') ?? $user->nom}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Prénoms</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Prénoms" value="{{old('prenoms') ?? $user->prenoms}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex">
                                <label class="pr-2"> Rôles Disponibles</label>
                                @foreach ($roles as $role)
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" value="{{$role->id}}" id="{{$role->id}}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                        <label for="{{$role->id}}" class="form-check-label pr-2">{{$role->nom}}</label>
                                    </div>
                                @endforeach
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Adresse Email" value="{{old('email') ?? $user->email}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" class="form-control" value="{{old('contact') ?? $user->contact}}">
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
