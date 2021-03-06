@extends("layouts.template")
@section('title',"OFFRE:DEVELOPPEUR WEB & MOBILE")

@section('content')

<h1 class="py-10 text-4xl font-bold text-center text-green-700 ">NOS OFFRES</h1>

<div class="inline-flex space-x-4 px-14 py-14">
    <div class="flex flex-col w-3/4">
        <!-- DETAIL -->
        <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
            <div>
                <h2 class="text-gray-400 uppercase">{{$offre->titre}}</h2>
                <p class="font-light">
                    {{substr_replace($offre->description_offres,"...",248)}}
                </p>
            </div>
            {{-- <div>
                <span class="p-2 text-white bg-green-500">STAGE</span>
            </div> --}}
        </div>
        <!-- Details Content -->
        <div class="relative detailDefault">
            <div class="inline-flex justify-ebd px-8 py-6 bg-white border rounded-lg">
                <div class="flex flex-col">
                    <h3>Profil de l’offre d’emploi</h3>
                    <div class="flex flex-row font-light w-full">
                        <p>{{substr_replace($offre->profil,"...",248)}}
                        </p>
                    </div>
                </div>
                <div class="flex flex-row pl-2 text-justify">
                    {{-- <h3 class="pb-2">Descriptif du poste</h3>
                    <p class="font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nostrum mollitia expedita tenetur accusamus ad? Reiciendis et porro laudantium laborum, esse est illum. In expedita atque ab repellat ipsum sapiente.</p> --}}
                    <h3 class="py-2"><span class="font-bold text-gray-500">{{$offre->category->category_offre_title}}</span></h3>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full bg-white border rounded">
                <div class="flex items-center text-blue-400">
                    <button type="button" id="seemore" class="font-bold pointer-cursor">Voir Plus</button><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- See More Content -->
        <div class="hidden hiddenDetail">
            <div class="inline-flex justify-between px-8 py-6 bg-white border rounded-lg">
                <div class="flex flex-col">
                    <h3>Profil de l’offre d’emploi</h3>
                    <div class="font-light">
                        {{$offre->profil}}
                    </div>
                </div>
                <div class="flex flex-row justify-end pl-2 w-2/5 text-justify">
                    {{-- <h3 class="pb-2">Descriptif du poste</h3>
                    <p class="font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nostrum mollitia expedita tenetur accusamus ad? Reiciendis et porro laudantium laborum, esse est illum. In expedita atque ab repellat ipsum sapiente.</p> --}}
                    <h3 class="py-2"><span class="font-bold text-gray-500">{{$offre->category->category_offre_title}}</span></h3>

                </div>
            </div>
            <div class="flex flex-row items-center justify-center w-full bg-white border rounded">
                <div class="flex items-center text-blue-400">
                    <button type="button" id="seeless" class="font-bold text-blue-400 pointer-cursor">Voir Moins</button><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-1/4 text-center bg-white border rounded-lg shadow-lg lg:h-60">
        <div class="p-3">
            <p class="font-light"><a href="#">Vous n'avez pas de compte ?</a></p>
            <p class="mb-4 font-light"> <a href="#">Oops? J'ai oublié mon mot de passe</a></p>
            <p><a href="{{route('candidature-spontanee')}}" class="w-1/2 px-4 py-2 mt-8 text-white bg-yellow-300 rounded-full cursor-pointer">Cliquer Ici </a></p>
        </div>
        <hr>
        <div class="p-3">
            <h3 class="pb-2 text-sm font-light font-bold"><a href="#">Vous recherchez une offre alléchante ?</a></h3>
            <p><a href="{{route('candidature-spontanee')}}" class="px-2 py-2 mt-8 text-white bg-yellow-300 border-green-800 rounded-full cursor-pointer ">Recherchez une offre d'emploi </a></p>
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
<script>
    let btnSeeMore = document.querySelector("#seemore");
    let btnSeeLess = document.querySelector("#seeless");
    let defaultDetail = document.querySelector(".detailDefault");
    let hiddenDetail = document.querySelector(".hiddenDetail");
    let seeMoreDetails = document.querySelector(".see-more");

    dropdown(btnSeeMore,"hidden",defaultDetail,hiddenDetail);
    dropdown(btnSeeLess,"hidden",hiddenDetail,defaultDetail);
    function dropdown(btn,className,block1,block2){
            btn.addEventListener("click",()=>{
            block1.classList.add(className);
            block2.classList.remove(className);
        });
    }
</script>
@endpush

