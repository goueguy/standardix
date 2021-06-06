@extends('layouts.admin')
@section('title', 'Roles')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        @if(session("success"))
            <span class="p-2 text-center alert alert-success">{{session("success")}}</span>
        @endif
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title"><span class="float-left">Ajouter</span></h3>
                <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                <form action="{{route('admin.roles.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">Titre</label>
                                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"  placeholder="Nouveau Role">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description du Role">
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

        <!-- /.row -->
        <div class="row">
            <div class="mt-2 col-12">
            <div class="card">
                <div class="card-header ">
                <h3 class="card-title">Liste</h3>
                </div>
                <!-- /.card-header -->
                <div class="p-2 card-body table-responsive">
                <table class="table table-hover text-nowrap table-bordered" id="categorie_roles">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Catégorie</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories_users as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nom}}</td>
                        <td>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                            <a href="#"><i class="fas fa-edit"></i></a>
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
</section>
@endsection
@section('scripts')

<script>
$(function () {

    $('#categorie_roles').DataTable({
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
