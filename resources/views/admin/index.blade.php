@extends('layouts.admin')
@section('title', 'Tableau de bord')

@section('content')
<div class="content-header">
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>{{$totalOffre}}</h3>
            <p>Total des offres</p>
            </div>
            <div class="icon">
                <i class="ion ion-speakerphone"></i>
            </div>
            <a href="{{route('admin.offres.list')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>{{$newTotalOffre}}</h3>
            <p>Nouvelles offres </p>
            </div>
            <div class="icon">
            <i class="ion ion-ios-albums"></i>
            </div>
            <a href="{{route('admin.offres.list')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>{{$totalCandidature}}</h3>

            <p>Candidatures</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('admin.candidatures.list')}}" class=" small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>{{$totalRendezVous}}</h3>
            <p>Rendez-vous</p>
            </div>
            <div class="icon">
            <i class="ion ion-ios-calendar"></i>
            </div>
            <a href="{{route('admin.rendezvous.index')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <section class="col-lg-12">
        <div class="card">
            <div class="pb-0 card-header">
            <h3 class="card-title ">
                {{-- <i class="mr-1 "></i> --}}
                <p>Offres récentes</p>
            </h3>
            <div class="card-tools">
                <span class="text-xs text-muted font-italic "><i class="mr-1 fas fa-calendar-day"></i>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', now()->subDay(10))->diffForHumans()}}</span>
            </div>
            </div>
            <div class="card-body">
            <div class="p-0 tab-content">
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
                        @foreach ($recentOffres as $key=> $offre)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$offre->titre}}</td>
                                <td> {{substr_replace($offre->description_offres,"...",20)}}</td>
                                <td>{{$offre->lieu}}</td>
                                <td>{{$offre->date_limite}}</td>
                                <td>{{$offre->duree_contrat}}</td>
                                <td><span class="badge bg-warning">{{$offre->category->category_offre_title}}</span></td>
                                <td>
                                    <a href="{{route('admin.offres.view',$offre->slug)}}"><i class="fas fa-eye"></i></a>
                                    {{-- <a href="{{route('admin.offres.delete',encrypt($offre->id))}}"  onclick="return confirm('Voulez-vous supprimer cette Offre');"><i class="fas fa-trash"></i></a>
                                    <a href="{{route('admin.offres.edit',encrypt($offre->id))}}"><i class="fas fa-edit"></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
    </div>
</section>
</div>
@endsection
