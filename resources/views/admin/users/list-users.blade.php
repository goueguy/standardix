@extends('layouts.admin')
@section('title', 'Utilisateurs')
@section('content')

<div class="container">
    <!-- /.row -->
    <div class="row">
        <div class="mt-3 col-lg-12">
            @if(session('success'))
                <div class="text-center alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        </div>
    <div class="mt-2 col-12">
        <div class="card">
        <div class="card-header ">
            <h3 class="card-title">Liste</h3>
            <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 80px;">
                <div class="input-group-append">
                <a href="{{route('admin.users.add')}}" class="btn btn-primary">Ajouter</a>
                </div>
            </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="p-2 card-body table-responsive">
            <table class="table table-hover text-nowrap table-bordered" id="users">
            <thead>
                <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=> $user)
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenoms}}</td>
                <td>{{$user->email}}</td>
                <td>{{implode(",",$user->roles()->pluck('nom')->toArray())}}</td>
                <td>
                    <a href="{{route('admin.users.view',$user->id)}}"><i class="fas fa-eye"></i></a>
                    <a href="{{route('admin.users.edit.password',$user->id)}}"><i class="fas fa-key"></i></a>
                    <a href="{{route('admin.users.delete',$user->id)}}" onclick="return confirm('Voulez-vous supprimer cet Utilisateur');"><i class="fas fa-trash"></i></a>
                    <a href="{{route('admin.users.edit',$user->id)}}"><i class="fas fa-edit"></i></a>
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
@section('scripts')

<script>
$(function () {

    $('#users').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,

    });
});
</script>
@endsection
