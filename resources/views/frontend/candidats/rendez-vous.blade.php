@extends("layouts.candidats")
@section('title',"CANDIDATS::RENDEZ VOUS")
@section('content')

    <h2 class="p-2 mb-5 mt-8 font-bold bg-green-100 border-l-4 border-green-600"> <span class="pl-2">MES RENDEZ-VOUS</span></h2>

        @if(count($rendezvous)>0)
            @foreach ($rendezvous as $data)
                <div class="flex flex-row">
                    <div class="w-full flex-col mb-3 border shadow-lg">
                        <div class="p-2 flex justify-between">
                            <h2 class="font-bold"><a href="#" id="rdv" data-id="{{$data->id}}">{{$data->label}}</a></h2>

                            <svg xmlns="http://www.w3.org/2000/svg" id="down-icon_{{$data->id}}" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" id="up-icon_{{$data->id}}" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                        </div>
                        <div class="p-2 hidden" id="detail_{{$data->id}}">
                            <p class="p-1">{{$data->contenu}}</p>
                            <p class="p-1"><span class="text-gray-400 font-bold">Date</span>:{{date('d/m/Y',strtotime($data->date_rendez_vous))}}</p>
                            <p class="p-1"><span class="text-gray-400 font-bold">Offre</span>: {{$data->offre->titre}}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        @endif
{{$rendezvous->links()}}
@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("body").on('click',"#rdv",function(e){
        e.preventDefault();
        let idRdv = $(this).data('id');
        $("#detail_"+idRdv).toggleClass("hidden");
        $("#up-icon_"+idRdv).toggleClass("hidden");
        $("#down-icon_"+idRdv).toggleClass("hidden");
    })

</script>
@endpush
