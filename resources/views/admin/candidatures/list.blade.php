@extends('layouts.admin')
@section('title', "Candidatures")
@section('content')

<div class="container">
    <!-- /.row -->
    <div class="row">
    <div class="mt-2 col-12">
        <div class="card">
        <div class="card-header ">
            @if(session('success'))
                <div class="text-center alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <h3 class="card-title">Liste </h3>
        </div>
        <!-- /.card-header -->
        <div class="p-2 card-body table-responsive">
            <table class="table table-hover text-nowrap table-bordered" id="candidatures">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom & Prénoms</th>
                    <th>Email</th>
                    <th>Métiers</th>
                    <th>Cv</th>
                    <th>Motivation</th>
                    <th>Offre</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($candidatures as $key => $candidature)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$candidature->name.' '.$candidature->firstname}}</td>
                        <td>{{$candidature->email}}</td>
                        <td>{{$candidature->metier->nom_metier}}</td>
                        <td><a href="{{asset('cv_uploads/'.$candidature->cv)}}">Télécharger</a></td>
                        <td>{{$candidature->motivation}}</td>
                        <td>{{$candidature->offre->titre}}</td>
                        <td>
                            <a href="{{route('admin.candidatures.delete',encrypt($candidature->id))}}" onclick="return confirm('Voulez-vous supprimer cette Candidature');"><i class="fas fa-trash"></i></a>
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
