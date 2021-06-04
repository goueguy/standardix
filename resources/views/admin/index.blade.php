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
                <h3>2</h3>
                <p>Total des offres</p>
                </div>
                <div class="icon">
                    <i class="ion ion-speakerphone"></i>
                </div>
                <a href="#" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                <h3>2</h3>

                <p>Nouvelles offres </p>
                </div>
                <div class="icon">
                <i class="ion ion-ios-albums"></i>
                </div>
                <a href="#" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>44</h3>

                <p>Candidatures</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class=" small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                <h3>65</h3>

                <p>Rendez-vous</p>
                </div>
                <div class="icon">
                <i class="ion ion-ios-calendar"></i>
                </div>
                <a href="#" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
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
                   <span class="text-xs text-muted font-italic "><i class="mr-1 fas fa-clock"></i>Il y a 28s</span>
                </div>
                </div>
                <div class="card-body">
                <div class="p-0 tab-content">
                    <div class="chart tab-pane active" id="revenue-chart"
                        style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
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
