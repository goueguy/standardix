@extends('layouts.admin')
@section('title', 'Rendez-vous')

@section('content')
<section class="content">
    <div class="container-fluid ">
        <div class="row">
            @if(session("success"))
              <span class="alert alert-success text-center p-2">{{session("success")}}</span>
            @endif
            <div class="col-md-12">
                <div class="card card-default mt-2">
                  <div class="card-header">
                    <h3 class="card-title"><span class="float-left">Ajouter</span></h3>
                    <span class="float-right"><a href="{{route('admin.users.list')}}">Retour</a></span>
                  </div>
                  <form action="{{route('admin.rendezvous.create')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="objet">Objet</label>
                                    <input type="text" name="objet" class="form-control @error('objet') is-invalid @enderror"  placeholder="Nouveau Objet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="label">Label</label>
                                    <input type="text" name="label" class="form-control" placeholder="Entrez label">
                                  </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contenu">Contenu</label>
                                    <input type="text" name="contenu" class="form-control @error('contenu') is-invalid @enderror"  placeholder="Nouveau le Contenu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_rendez_vous ">Date de Rendez Vous </label>
                                    <input type="date" name="description" class="form-control">
                                  </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="users" id="" class="form-control">
                                            <option value="">Candidats</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->nom}}  {{$user->prenoms}}</option>

                                            @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="users" id="" class="form-control">
                                            <option value="">Offres D'emploi</option>
                                            @foreach ($offres as $offre)
                                            <option value="{{$offre->id}}">{{$offre->titre}}</option>

                                            @endforeach
                                    </select>
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
                   <table class="table table-hover text-nowrap table-bordered" id="rendez_vous">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Objet</th>
                         <th>Label</th>
                         <th>Contenu</th>
                         <th>Date de Rendez Vous</th>
                       </tr>
                     </thead>
                     <tbody>
                      @foreach ($messages as $message)
                        <tr>
                            <td>{{$message->id}}</td>
                            <td>{{$message->objet}}</td>
                            <td>{{$message->label}}</td>
                            <td>{{$message->contenu}}</td>
                            <td>{{$message->date_rendez_vous }}</td>
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
