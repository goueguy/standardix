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
            <h3 class="card-title">Liste </h3> <span class="float-right"><button type="button" data-url="{{route('candidatures.verify')}}" id="btnRendezVous" class="btn btn-primary btn-block">Rendez-Vous</button></span>
        </div>
        <!-- /.card-header -->
        <div class="p-2 card-body table-responsive">
            <form action="#" method="POST">
                @csrf
                <table class="table table-hover text-nowrap table-bordered" id="candidatures">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="checkboxAll"></th>
                            <th>N°</th>
                            <th>Nom & Prénoms</th>
                            <th>Métiers</th>
                            <th>Offre</th>
                            <th>Cv</th>
                            {{-- <th>Sélectionné</th> --}}
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($candidatures as $key => $candidature)
                            <tr>
                                <td><input type="checkbox" class="checkboxClass" name="id" data-id="{{$candidature->id}}"/></td>
                                <td>{{$key+1}}</td>
                                <td>{{$candidature->name.' '.$candidature->firstname}}</td>
                                <td>{{$candidature->metier->nom_metier}}</td>
                                <td>{{$candidature->offre->titre}}</td>
                                <td><a href="{{asset('cv_uploads/'.$candidature->cv)}}" target="_blank">Télécharger</a></td>
                                {{-- <td>
                                    @if($candidature->status==0)
                                        <span class="badge badge-danger">NON</span>
                                        <form action="{{route('candidatures.selected',encrypt($candidature->id))}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-xs">Sélectionner Candidat</button>
                                        </form>
                                    @else
                                        <span class="badge badge-success">OUI</span>
                                        <form action="{{route('candidatures.selected',encrypt($candidature->id))}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-xs">Retirer Candidat</button>
                                        </form>
                                    @endif
                                </td> --}}
                                <td>
                                    {{-- <a href="{{route('candidatures.rendezvous.create',encrypt($candidature->id))}}">Rendez-Vous</a> --}}
                                    <a href="{{route('admin.candidatures.delete',encrypt($candidature->id))}}" onclick="return confirm('Voulez-vous supprimer cette Candidature');"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </form>
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
$(function (e) {

    $('#candidatures').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true
    });

    //check all checkbox input in a sample click
    $("#checkboxAll").click(function(e){
        if($(this).is(':checked',true)){
            $(".checkboxClass").prop('checked',true);
        }else{
            $(".checkboxClass").prop('checked',false);
        }
    });

    $("#btnRendezVous").click(function(e){
        e.preventDefault();

        let allInputs = [];
        $(".checkboxClass:checked").each(function(){
            allInputs.push($(this).attr('data-id'));
        })
        if(allInputs.length>0){
            $.ajax({
            url:$(this).data('url'),
            type:"POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:'ids='+allInputs.join(","),
            success:function(data){
                if(data['status']==200){
                    let param = data['candidats'];
                    window.location.href='/candidatures/'+param+'/rendez-vous/create';

                }
            },
            error:function(error){
                swal("ATTENTION !", error, "error");
            }
        })
        }else{
            swal("ATTENTION !", "VOUS DEVEZ SÉLECTIONNER AU MOINS UN CANDIDAT", "error");
        }
        //console.log(allInputs);

    });
});

</script>
@endsection
