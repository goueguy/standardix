    @extends('layouts.admin')
    @section('title', 'Catégories-Offres')

    @section('content')
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3 mb-3">
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
                    <form action="{{route('admin.categorie.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categorie_offre_title">Titre</label>
                                    <input type="text" name="categorie_offre_title" class="form-control @error('categorie_offre_title') is-invalid @enderror"  placeholder="Nouvelle Catégorie">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categorie_offre_desc">Description</label>
                                    <input type="text" name="categorie_offre_desc" class="form-control" placeholder="Description de la Categorie">
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
                    <table class="table table-hover text-nowrap table-bordered" id="categorie_offres">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Catégorie</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories_offres as $key=> $cat)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$cat->category_offre_title}}</td>
                            <td>
                                {{-- <a href="#"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{route('admin.categorie.edit',$cat->id)}}"><i class="fas fa-edit"></i></a>
                                <a href="{{route('admin.categorie.delete',$cat->id)}}" onclick="return confirm('VOULEZ-VOUS SUPPRIMER CETTE CATÉGORIE ?')"><i class="fas fa-trash"></i></a>
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

        $('#categorie_offres').DataTable({
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
