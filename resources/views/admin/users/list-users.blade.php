@extends('layouts.admin')
@section('title', 'Utilisateurs')
@section('content')

<div class="container">
       <!-- /.row -->
       <div class="row">
        <div class="mt-2 col-12">
          <div class="card">
            <div class="card-header ">
              <h3 class="card-title">Liste</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="float-right form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 80px;">
                  <div class="input-group-append">
                    <a href="{{route('admin.users.add')}}" class="btn btn-primary">Ajouter</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="p-0 card-body table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénoms</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Niveau Accès</th>
                    <th>Cv</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($users as $user)
                 <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nom}}</td>
                    <td>{{$user->prenoms}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->roles->first()->nom}}</td>
                    <td>{{$user->cv}}</td>
                    <td>
                        <a href="{{route('admin.users.view')}}"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                        <a href="{{route('admin.users.edit')}}"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>
@endsection
