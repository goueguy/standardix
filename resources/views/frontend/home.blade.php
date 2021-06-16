@extends("layouts.template")
@section('title',"ACCUEIL")
@section('content')

<h1 class="py-10 text-4xl font-bold text-center text-green-700 ">NOS OFFRES</h1>
<div class="inline-flex space-x-4 px-14 py-14">
    <div class="flex flex-col w-3/4">
        <!-- OFFRE 1 -->
    @if(count($offres)>0)
        @foreach ($offres as $offre)
            <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
                <div>
                    <h2 class="text-gray-400 uppercase"><a href="{{route('details-offres', $offre->slug)}}">{{$offre->titre}}</a></h2>
                    <p class="font-light">
                        {{substr_replace($offre->description_offres,"...",248)}}
                    </p>
                    <div class="flex flex-row items-center">
                        <div class="flex pt-3 text-sm font-light"><a href="{{route('details-offres', $offre->slug)}}"><span class="p-2 mr-2 text-center text-white font-bold bg-gray-500 rounded-full">Voir plus</span></a><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg><span class="px-1 font-bold">Date d'édition</span>:{{date('d-m-Y',strtotime($offre->date_edition))}} <span class="pr-2"></span><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg><span class="pl-1 font-bold">Date limite</span>:{{date('d-m-Y',strtotime($offre->date_limite))}}
                        </div>
                    </div>
                </div>
                <div class="flex flex-col space-y-14 item-center">
                    <span class="p-2 text-center text-gray-600 font-bold rounded-full"><a href="#">{{$offre->categorie->categorie_offre_title}}</a></span>
                    <span class="p-2 text-center text-white bg-primary rounded-full"><a href="{{route('candidats.postulate.index', $offre->slug)}}">Postuler</a></span>
                </div>
            </div>
        @endforeach
        @else
        <div class="flex flex-col w-auto">
            <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
                <div class="font-light">
                    <p class="font-bold text-center text-red-500">! Pas d'Offre Disponible Actuellement !</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque, ratione aperiam repellendus minima totam rem optio placeat numquam unde eligendi voluptatum. Suscipit id quisquam cum autem tempora ducimus ea exercitationem?</p>
                </div>
                <div class="flex flex-col space-y-4 item-center">

                </div>
            </div>
        </div>
        @endif
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

