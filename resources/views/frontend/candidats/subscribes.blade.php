@extends("layouts.candidats")
@section('title',"CANDIDATS::PARAMETRES")
@section('content')

    <h2 class="mb-5 font-bold border-l-4 border-green-600"> <span class="pl-2">MES SOUSCRIPTIONS</span></h2>
    <table class="w-full border border-collapse table-auto border-green-9">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 text-sm border border-gray-400">N°</th>
                <th class="p-2 text-sm border border-gray-400">Titre</th>
                <th class="p-2 text-sm border border-gray-400">Description</th>
                <th class="p-2 text-sm border border-gray-400">Date Edition</th>
                <th class="p-2 text-sm border border-gray-400">Date Limite</th>
                <th class="p-2 text-sm border border-gray-400">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offres as $key=>$offre)
                <tr>
                    <td class="p-2 border border-gray-400">{{$key+1}}</td>
                    <td class="p-2 text-sm border border-gray-400">{{$offre->titre}}</td>
                    <td class="p-2 text-sm border border-gray-400">
                        {{substr_replace($offre->description_offres,"...",50)}}
                    </td>
                    <td class="p-2 text-sm border border-gray-400">{{date("d-m-Y",strtotime($offre->date_edition))}}</td>
                    <td class="p-2 text-sm border border-gray-400">{{date("d-m-Y",strtotime($offre->date_limite))}}</td>
                    <td class="p-2 border border-gray-400">
                        <a href="{{route('candidatures.detail.offre',encrypt($offre->id))}}" class="flex text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
