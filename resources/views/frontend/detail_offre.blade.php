@extends("layouts.template")
@section('title',"OFFRE:DEVELOPPEUR WEB & MOBILE")

@section('content')

<h1 class="py-10 text-4xl font-bold text-center text-green-700 ">NOS OFFRES</h1>

<div class="inline-flex space-x-4 px-14 py-14">
    <div class="flex flex-col w-3/4">
        <!-- DETAIL -->
        <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
            <div>
                <h2 class="text-gray-400 uppercase">Formateur Sénior billingue</h2>
                <p class="font-light">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa commodi illo nam in itaque corrupti aliquam accusamus, saepe sint libero accusantium veniam voluptatibus delectus
                </p>
            </div>
            {{-- <div>
                <span class="p-2 text-white bg-green-500">STAGE</span>
            </div> --}}
        </div>
        <!-- Details Content -->
        <div class="relative detailDefault">
            <div class="inline-flex justify-between px-8 py-6 bg-white border rounded-lg">
                <div class="flex flex-col w-3/5">
                    <h3>À propos de l’offre d’emploi</h3>
                    <div class="font-light">
                        <p>Dans le cadre d’un programme stratégique de développement de nos activités, nous recrutons un développeur web et mobile.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-2/5">
                    {{-- <h3 class="pb-2">Descriptif du poste</h3>
                    <p class="font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nostrum mollitia expedita tenetur accusamus ad? Reiciendis et porro laudantium laborum, esse est illum. In expedita atque ab repellat ipsum sapiente.</p> --}}
                    <h3 class="py-2">Type d’emploi: <span class="font-light">STAGE</span></h3>
                </div>
            </div>
            <div class="flex flex-row items-center justify-center w-full bg-white border rounded">
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
                <div class="flex flex-col w-3/5">
                    <h3>À propos de l’offre d’emploi</h3>
                    <div class="font-light">
                        <p>Dans le cadre d’un programme stratégique de développement de nos activités, nous recrutons un développeur web et mobile.
                        </p>
                        <p>Profil du poste</p>
                        <ul>
                            <li>* Avoir un Bac+3 au moins</li>
                            <li>* Avoir mis en ligne un site web ou une application mobile</li>
                            <li>* Maitrisé le Framework Flutter est un atout</li>
                        </ul>
                        <div>
                            <p>Délai: 15 Mai 2021</p>
                            <p>* Dossier de candidature</p>
                            <p>* Veuillez faire parvenir votre CV à l’adresse e-mail suivante : contact@iatecole.com.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-2/5">
                    {{-- <h3 class="pb-2">Descriptif du poste</h3>
                    <p class="font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nostrum mollitia expedita tenetur accusamus ad? Reiciendis et porro laudantium laborum, esse est illum. In expedita atque ab repellat ipsum sapiente.</p> --}}
                    <h3 class="py-2">Type d’emploi: <span class="font-light">STAGE</span></h3>

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

