@extends('layouts.admin')
@section('title', 'Rendez-vous')

@section('content')
<section class="content">
<div class="container-fluid ">
        <!-- /.row -->
        <div class="row">
            <div class="mt-2 col-12">
            <div class="card">
                <div class="card-header ">
                <h3 class="card-title">Liste</h3>
                </div>
                <!-- /.card-header -->
                <div class="p-2 card-body table-responsive">
                <table class="table table-hover text-nowrap table-bordered" id="rendez_vous">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Objet</th>
                        <th>Label</th>
                        <th>Contenu</th>
                        <th>Date de Rendez Vous</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($messages as $key=> $message)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$message->objet}}</td>
                        <td>{{$message->label}}</td>
                        <td>{{substr_replace($message->contenu,"...",20)}}</td>
                        <td>{{date("d-m-Y",strtotime($message->date_rendez_vous))}}</td>
                        <td>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.rendez-vous.delete',encrypt($message->id))}}" onclick="return confirm('Voulez-vous supprimer ce Rendez-vous ?');"><i class="fas fa-trash"></i></a>
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

    $('#rendez_vous').DataTable({
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
