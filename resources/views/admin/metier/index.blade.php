@extends('layouts.admin')
@section('title', 'Metier')

@section('content')
<section class="content">
<div class="container-fluid ">
    <div class="row">
        <div class="mt-3 mb-3 col-md-12">
            @if(session("success"))
                <span class="p-2 text-center alert alert-success">{{session("success")}}</span>
            @endif
        </div>
        <div class="col-md-12">
            <div class="mt-2 card card-default">
                <div class="card-header">
                <h3 class="card-title"><span class="float-left">Ajouter</span></h3>
                <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                </div>
                <form action="{{route('admin.metier.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">Titre</label>
                                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"  placeholder="Nouveau Metier">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description du Metier">
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
                <table class="table table-hover text-nowrap table-bordered" id="domaines">
                    <thead>
                    <tr>
                        <th>N??</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($metiers as $metier)
                    <tr>
                        <td>{{$metier->id}}</td>
                        <td>{{$metier->nom_metier}}</td>
                        <td>{{$metier->description_metier}}</td>
                        <td>
                            {{-- <a href="#"><i class="fas fa-eye"></i></a> --}}
                            <a href="{{route('admin.metier.delete',$metier->id)}}" onclick="return confirm('Voulez-vous supprimer ce m??tier')"><i class="fas fa-trash"></i></a>
                            <a href="{{route('admin.metier.edit',$metier->id)}}"><i class="fas fa-edit"></i></a>
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

    $('#domaines').DataTable({
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
