@extends("layouts.candidats")
@section('title',"CANDIDATS::OFFRES")
@section('content')

<div class="flex-col p-5 mt-5">
    <a href="{{redirect()->back()->getTargetUrl()}}" class="flex flex-row items-center w-28 justify-content-center hover:bg-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
        </svg>
        <span class="px-2">Retour</span>
    </a>
    <h2 class="mb-4 font-bold text-center underline text-primary">{{$offre->titre}}</h2>

    <div class="flex flex-col mb-3 justify-items-end">
        <div class="inline-flex">
            <label class="float-left font-bold">Type d'Offre</label><label class="float-right font-bold">Lieu</label>
        </div>
        <div class="flex flex-row space-x-2">
            <input type="text" placeholder="Catégorie de l'offre" class="w-1/2 p-3 bg-gray-100 border focus:outline-none" value="{{$offre->categorie->categorie_offre_title}}" readonly>
            <input type="text" placeholder="Lieu" class="w-1/2 p-3 bg-gray-100 border focus:outline-none" readonly value="{{$offre->lieu}}">
        </div>
    </div>

    <div class="flex flex-col mt-4 mb-4">
        <div class="inline-flex justify-between">
            <label class="float-left font-bold">Date d'Édition</label><label class="float-right font-bold">Date Limite</label>
        </div>
        <div class="flex flex-row space-x-2">
            <input type="text" placeholder="Durée du contrat" class="w-1/2 p-3 bg-gray-100 border focus:outline-none" readonly value="{{date("d-m-Y",strtotime($offre->date_edition))}}">
        <input type="text" placeholder="Date Edition" class="w-1/2 p-3 bg-gray-100 border focus:outline-none" readonly value="{{date("d-m-Y",strtotime($offre->date_limite))}}">
        </div>
    </div>
    <label class="font-bold">Description de l'Offre</label>
    <div class="flex flex-row mt-4 mb-4 space-x-2">
        <textarea  class="w-full p-3 bg-gray-100 border resize-none focus:outline-none"  rows="10" readonly>{{$offre->description_offres}}</textarea>
    </div>
    <label class="font-bold">Profil</label>
    <div class="flex flex-row mt-4 mb-4 space-x-2 ">
        <textarea  class="w-full  p-3 bg-gray-100 border resize-none focus:outline-none"  rows="10" readonly>{{$offre->profil}}</textarea>
    </div>
    <label class="font-bold">Avantages</label>
    <div class="flex flex-row mt-4 mb-4 space-x-2">
        <textarea  class="w-full p-3 bg-gray-100 border resize-none focus:outline-none" rows="10" readonly>{{$offre->avantages}}</textarea>
    </div>
    <label class="font-bold">Dossier de Candidature</label>
    <div class="flex flex-row mt-4 mb-4 space-x-2">
        <textarea  class="w-full p-3 bg-gray-100 border resize-none focus:outline-none" rows="10" readonly>{{$offre->dossier_candidature}}</textarea>
    </div>
    <label class="font-bold">Durée du Contrat</label>
    <div class="flex flex-row mt-4 mb-4 space-x-2">
        <input type="text" placeholder="Date d'edition" class="w-full p-3 bg-gray-100 border focus:outline-none" readonly value="{{$offre->duree_contrat}}">
    </div>

</div>


@endsection
