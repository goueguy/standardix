@extends("layouts.template")
@section('title',"ACCUEIL")
@section('content')

<h1 class="py-10 text-4xl font-bold text-center text-green-700 ">NOS OFFRES</h1>

<div class="inline-flex space-x-4 px-14 py-14">
    <div class="flex flex-col w-3/4">
        <!-- OFFRE 1 -->
      @foreach ($offres as $offre)
      <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
        <div>
            <h2 class="text-gray-400 uppercase"><a href="{{route('details-offres', $offre->slug)}}">{{$offre->titre}}</a></h2>
            <p class="font-light">
                {{$offre->description_offres}}
            </p>
            <p class="pt-3 text-sm"><a href="{{route('details-offres', $offre->slug)}}">Voir plus</a> | Publié le {{$offre->date_edition}} | Date limite: le {{$offre->date_limite}}</p>
        </div>
        <div class="flex flex-col space-y-4 item-center">
            <span class="p-2 text-center text-white bg-green-500 rounded-full"><a href="#">{{$offre->categorie_offre_id}}</a></span>
            <span class="p-2 text-center text-white bg-red-500 rounded-full"><a href="{{route('candidats.postulate.index', $offre->slug)}}">Postuler</a></span>
        </div>
    </div>
      @endforeach

    </div>
    <div class="flex flex-col w-1/4 h-40 text-center bg-white border rounded-lg shadow-lg">
        <div class="p-3">
            <p class="font-light"><a href="{{route('register')}}">Vous n'avez pas de compte ?</a></p>
            <p class="mb-4 font-light"> <a href="#">Oops? J'ai oublié mon mot de passe</a></p>
            <p><a href="{{route('register')}}" class="w-1/2 px-4 py-2 mt-8 text-white rounded-full cursor-pointer bg-yellow">Cliquer Ici </a></p>
        </div>
    </div>
</div>
@endsection
@push('metier')
<style>
    body{
        background-color: #f3f4f6;
    }
</style>
@endpush

