@extends('layouts.admin')
@section('title', 'Mot de Passe')


@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title"><span class="float-left">Modification de Mot de Passe</span></h3>
                <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif
                    </div>
                </div>
                <form action="{{route('admin.users.password.update',Auth::user()->id)}}" method="POST">
                    @csrf
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password">Ancien Mot de Passe</label>
                                <input type="password" name="old_password" class="@error('old_password') is-invalid @enderror form-control" value="{{old('old_password')}}">
                            @error('old_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password">Nouveau mot de passe</label>
                                <input type="password" name="password" class="@error('password') is-invalid @enderror form-control" value="{{old('password')}}">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password_confirmation">Confirmation du mot de passe</label>
                                <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control" value="{{old('password_confirmation')}}">
                                @error('password_confirmation')
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
