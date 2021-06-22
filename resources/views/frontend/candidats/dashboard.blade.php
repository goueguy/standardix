@extends("layouts.candidats")
@section('title',"CANDIDATS::DASHBOARD")
@section('content')


<div class="mt-5">
    @if (session('danger'))
        <div class="block text-center text-white bg-red-300">
            <span>{{session('danger')}}</span>
        </div>
    @endif
    <h1 class="text-opacity-100 capitalize text-medium">HELLO, {{Auth::user()->nom.' '.Auth::user()->prenoms}}</h1>
    <p class="font-light text-opacity-100 text-medium">Nous vous souhaitons plein de succès avec nous !</p>
</div>
<h2 class="p-2 mb-5 mt-8 font-bold bg-green-100 border-l-4 border-green-600"> <span class="pl-2">STATISTIQUES</span></h2>

<!-- COUNT -->
<div class="flex justify-between space-x-2">
    <div class="rounded border  w-1/3 text-center shadow p-4">
        <h2 class="font-bold text-gray-400">Offres Lancées</h2>
        <p class="font-bold text-green-400">{{$totalOffre}}</p>
    </div>
    <div class="rounded border  w-1/3 text-center shadow p-4">
        <h2 class="font-bold text-gray-400">Mes Candidatures</h2>
        <p class="font-bold text-green-400">{{$totalCandidature}}</p>
    </div>
    <div class="rounded border  w-1/3 text-center shadow p-4">
        <h2 class="font-bold text-gray-400">Mes RDV</h2>
        <p class="font-bold text-green-400">{{$totalRendezVous}}</p>
    </div>

</div>
<h2 class="p-2 mb-5 mt-8 font-bold bg-green-100 border-l-4 border-green-600"> <span class="pl-2">CINQ DERNIÈRES OFFRES LANCÉES</span></h2>

<div class="flex justify-center mt-3">
    @if(count($offres)>0)
        <table class="mb-4 text-sm bg-white rounded shadow-md">
            <tbody>
                <tr class="border">
                    <th class="p-3 text-left">N°</th>
                    <th class="p-3 text-left">Titre</th>
                    <th class="p-3 px-5 text-left">Description</th>
                    <th class="p-3 text-left">Date limite</th>
                    <th class="p-3 text-left">Action</th>
                    <th></th>
                </tr>

                @foreach ($offres as $key=>$offre)
                <tr class="bg-gray-100 border-b hover:bg-orange-100">
                    <td class="p-3 "><input type="text"  class="bg-transparent">{{$key+1}}</td>
                    <td class="p-3 "><input type="text" class="bg-transparent">{{$offre->titre}}</td>
                    <td class="p-3 px-5"><input type="text"  class="bg-transparent">{{substr_replace($offre->description_offres," ... ",25)}}</td>
                    <td class="p-3 "><input type="text"  class="bg-transparent">{{date("d-m-Y",strtotime($offre->date_limite))}}</td>

                    <td class="flex justify-end p-3">
                        <a href="{{route('candidatures.detail.offre',$offre->slug)}}"  title="Voir en détail" class="px-2 py-1 mr-3 text-sm text-green-600 rounded hover:bg-blue-100 focus:outline-none focus:shadow-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                        </a>
                        <a href="{{route('candidats.postulate.index', $offre->slug)}}" title="Cliquer pour postuler" class="py-1 mr-3 text-sm text-yellow-500 rounded hover:bg-green-100 focus:outline-none focus:shadow-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="flex max-w-sm mb-4 bg-teal-lighter">
            <div class="w-16 bg-teal">
                <div class="p-4">
                    <svg class="w-8 h-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M437.019 74.981C388.667 26.629 324.38 0 256 0S123.333 26.63 74.981 74.981 0 187.62 0 256s26.629 132.667 74.981 181.019C123.332 485.371 187.62 512 256 512s132.667-26.629 181.019-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.668-74.981-181.019zM256 470.636C137.65 470.636 41.364 374.35 41.364 256S137.65 41.364 256 41.364 470.636 137.65 470.636 256 374.35 470.636 256 470.636z"/><path d="M256 235.318c-11.422 0-20.682 9.26-20.682 20.682v94.127c0 11.423 9.26 20.682 20.682 20.682 11.423 0 20.682-9.259 20.682-20.682V256c0-11.422-9.259-20.682-20.682-20.682zM270.625 147.248A20.826 20.826 0 0 0 256 141.19a20.826 20.826 0 0 0-14.625 6.058 20.824 20.824 0 0 0-6.058 14.625 20.826 20.826 0 0 0 6.058 14.625A20.83 20.83 0 0 0 256 182.556a20.826 20.826 0 0 0 14.625-6.058 20.826 20.826 0 0 0 6.058-14.625 20.839 20.839 0 0 0-6.058-14.625z"/></svg>
                </div>
            </div>
            <div class="border shadow items-center text-center w-auto p-4 text-grey-darker">
                <span class="pb-4 text-lg font-bold">
                Désolé!
                </span>
                <div class="leading-tight">
                    Pas de données. Revenez plus tard.
                </div>
            </div>
        </div>

    @endif

</div>
@endsection
