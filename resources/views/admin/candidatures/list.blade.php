@extends('layouts.admin')
@section('title', "Candidatures")
@section('content')

<div class="container">
    <!-- /.row -->
    <div class="row">
    <div class="mt-2 col-12">
        <div class="card">
        <div class="card-header ">
            <h3 class="card-title">Liste </h3>
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
            <table class="table table-hover text-nowrap table-bordered" id="candidatures">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Lieu</th>
                    <th>Date Limite</th>
                    <th>Mission</th>
                    <th>Total Candidatures</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Développeur</td>
                    <td>FullStack Dev PHP</td>
                    <td>Abidjan</td>
                    <td>04-06-2021</td>
                    <td>Créer des Appli Web Pro</td>
                    <td>5</td>
                    <td>
                        <a href="{{route('admin.candidatures.view')}}"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Développeur</td>
                    <td>FullStack Dev PHP</td>
                    <td>Abidjan</td>
                    <td>04-06-2021</td>
                    <td>Créer des Appli Web Pro</td>
                    <td>7</td>
                    <td>
                        <a href="{{route('admin.candidatures.view')}}"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Développeur</td>
                    <td>FullStack Dev PHP</td>
                    <td>Abidjan</td>
                    <td>04-06-2021</td>
                    <td>Créer des Appli Web Pro</td>
                    <td>10</td>
                    <td>
                        <a href="{{route('admin.candidatures.view')}}"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>

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

    $('#candidatures').DataTable({
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
