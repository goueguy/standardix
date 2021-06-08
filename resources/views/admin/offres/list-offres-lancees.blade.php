@extends('layouts.admin')
@section('title', "Offres d'Emploi")
@section('content')

<div class="container">
    <!-- /.row -->
    <div class="row">
    <div class="mt-2 col-12">
        <div class="card">
        <div class="card-header ">
            <h3 class="card-title">Liste Offres Lancées</h3>
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
                <a href="{{route('admin.offres.add')}}" class="btn btn-primary">Ajouter</a>
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
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Lieu</th>
                    <th>Date Limite</th>
                    <th>Durée Contrat</th>
                    <th>Mission</th>
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
                    <td>6 mois</td>
                    <td>Créer des Appli Web Pro</td>
                    <td>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Développeur</td>
                    <td>FullStack Dev PHP</td>
                    <td>Abidjan</td>
                    <td>04-06-2021</td>
                    <td>6 mois</td>
                    <td>Créer des Appli Web Pro</td>
                    <td>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Développeur</td>
                    <td>FullStack Dev PHP</td>
                    <td>Abidjan</td>
                    <td>04-06-2021</td>
                    <td>6 mois</td>
                    <td>Créer des Appli Web Pro</td>
                    <td>
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
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
