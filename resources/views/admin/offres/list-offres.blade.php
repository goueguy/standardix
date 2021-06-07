@extends('layouts.admin')
@section('title', "Offres d'Emploi")
@section('content')

<div class="container">
    <!-- /.row -->
    <div class="row">
    <div class="mt-2 col-12">
        <div class="card">
        <div class="card-header ">
            <h3 class="card-title">Liste</h3>
            <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 80px;">
                <div class="input-group-append">
                <a href="{{route('admin.offres.add')}}" class="btn btn-primary">Ajouter</a>
                </div>
            </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="p-2 card-body table-responsive">
            <table class="table table-hover text-nowrap table-bordered" id="offres">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Lieu</th>
                    <th>Date Limite</th>
                    <th>Durée Contrat</th>
                    <th>Catégorie</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($offres as $key=> $offre)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$offre->titre}}</td>
                        <td> {{substr_replace($offre->description_offres,"...",20)}}</td>
                        <td>{{$offre->lieu}}</td>
                        <td>{{$offre->date_limite}}</td>
                        <td>{{$offre->duree_contrat}}</td>
                        <td><span class="badge bg-warning">{{$offre->categorie->categorie_offre_title}}</span></td>
                        <td>
                            <a href="{{route('admin.offres.view')}}"><i class="fas fa-eye"></i></a>
                            <a href="#"  onclick="return confirm('Voulez-vous supprimer cette Offre');"><i class="fas fa-trash"></i></a>
                            <a href="{{route('admin.offres.edit')}}"><i class="fas fa-edit"></i></a>
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

    $('#offres').DataTable({
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
