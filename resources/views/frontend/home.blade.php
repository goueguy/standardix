@extends("layouts.template")
@section('title',"ACCUEIL")
@section('content')

<h1 class="py-10 text-4xl font-bold text-center text-green-700 ">NOS OFFRES</h1>

<div class="inline-flex space-x-4 px-14 py-14">
    <div class="flex flex-col w-3/4">
        <!-- OFFRE 1 -->
        <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
            <div>
                <h2 class="text-gray-400 uppercase"><a href="{{route('details-offres')}}">Formateur Sénior billingue</a></h2>
                <p class="font-light">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa commodi illo nam in itaque corrupti aliquam accusamus, saepe sint libero accusantium veniam voluptatibus delectus
                </p>
                <p class="pt-3 text-sm"><a href="{{route('details-offres')}}">Voir plus</a> | Publié le 12-01-2021 | Date limite: le 16-05-2021</p>
            </div>
            <div>
                <span class="p-2 text-white bg-green-500">STAGE</span>
            </div>
        </div>
        <!-- OFFRE 2 -->
        <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
            <div>
                <h2 class="text-gray-400 uppercase">Référent Digital et Community Manager</h2>
                <p class="font-light">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa commodi illo nam in itaque corrupti aliquam accusamus, saepe sint libero accusantium veniam voluptatibus delectus
                </p>
                <p class="pt-3 text-sm"><a href="#">Voir plus</a> | Publié le 21-05-2021 | Date limite: le 18-05-2021</p>
            </div>
            <div>
                <span class="p-2 text-white bg-green-500">CDI</span>
            </div>
        </div>
        <!-- OFFRE 4 -->
        <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
            <div>
                <h2 class="text-gray-400 uppercase">Développeur Web & Mobile</h2>
                <p class="font-light">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa commodi illo nam in itaque corrupti aliquam accusamus, saepe sint libero accusantium veniam voluptatibus delectus
                </p>
                <p class="pt-3 text-sm"><a href="#">Voir plus</a> | Publié le 12-05-2021 | Date: le 12-05-2021</p>
            </div>
            <div>
                <span class="p-2 text-white bg-green-500">CDD</span>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-1/4 h-40 text-center bg-white border rounded-lg shadow-lg">
        <div class="p-3">
            <p class="font-light"><a href="#">Vous n'avez pas de compte ? Créer compte ?</a></p>
            <p class="mb-4 font-light"> <a href="#">Oops? J'ai oublié mon mot de passe</a></p>
            <p><a href="{{route('candidature-spontanee')}}" class="w-1/2 px-4 py-2 mt-8 text-white bg-yellow-300 rounded cursor-pointer">Cliquer Ici </a></p>
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

