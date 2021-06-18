    @extends('layouts.admin')
    @section('title', 'Catégories-Offres')

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
                    <span class="float-right"><a href="{{route('admin.categorie.create')}}">Retour</a></span>
                    </div>
                    <form action="{{route('admin.categorie.update',$categorie->id)}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categorie_offre_title">Titre</label>
                                    <input type="text" name="categorie_offre_title" class="form-control @error('categorie_offre_title') is-invalid @enderror"  value="{{$categorie->categorie_offre_title}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categorie_offre_desc">Description</label>
                                    <input type="text" name="categorie_offre_desc" class="form-control" value="{{$categorie->categorie_offre_desc}}">
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
