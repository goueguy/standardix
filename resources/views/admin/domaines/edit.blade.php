@extends('layouts.admin')
@section('title', 'Editer Domaine')

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
                <h3 class="card-title"><span class="float-left">Modifier</span></h3>
                <span class="float-right"><a href="{{route('admin.domaine.create')}}">Retour</a></span>
                </div>
                <form action="{{route('admin.domaine.update',encrypt($domaine->id))}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">Titre</label>
                                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"  placeholder="Nouveau Domaine" value="{{$domaine->nom}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description du Domaine" value="{{$domaine->description_domaine_emplois}}">
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
