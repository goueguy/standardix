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
            <div class="flex flex-col space-y-4 item-center">
                <span class="p-2 text-center text-white bg-green-500 rounded-full"><a href="#">Stage</a></span>
                <span class="p-2 text-center text-white bg-red-500 rounded-full"><a href="#">Postuler</a></span>
            </div>
        </div>
        <!-- OFFRE 2 -->
        <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
            <div>
                <h2 class="text-gray-400 uppercase"><a href="{{route('details-offres')}}">Développeur Web & Mobile</a></h2>
                <p class="font-light">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa commodi illo nam in itaque corrupti aliquam accusamus, saepe sint libero accusantium veniam voluptatibus delectus
                </p>
                <p class="pt-3 text-sm"><a href="{{route('details-offres')}}">Voir plus</a> | Publié le 12-01-2021 | Date limite: le 16-05-2021</p>
            </div>
            <div class="flex flex-col space-y-4 item-center">
                <span class="p-2 text-center text-white bg-green-500 rounded-full"><a href="#">CDD</a></span>
                <span class="p-2 text-center text-white bg-red-500 rounded-full"><a href="#">Postuler</a></span>
            </div>
        </div>
        <!-- OFFRE 3 -->
        <div class="inline-flex px-8 py-6 mb-4 bg-white border rounded-lg shadow-lg">
            <div>
                <h2 class="text-gray-400 uppercase"><a href="{{route('details-offres')}}">Référent Digital & Community Manager</a></h2>
                <p class="font-light">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa commodi illo nam in itaque corrupti aliquam accusamus, saepe sint libero accusantium veniam voluptatibus delectus
                </p>
                <p class="pt-3 text-sm"><a href="{{route('details-offres')}}">Voir plus</a> | Publié le 12-01-2021 | Date limite: le 16-05-2021</p>
            </div>
            <div class="flex flex-col space-y-4 item-center">
                <span class="p-2 text-center text-white bg-green-500 rounded-full"><a href="#">Freelance</a></span>
                <span class="p-2 text-center text-white bg-red-500 rounded-full"><a href="#">Postuler</a></span>
            </div>
        </div>
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

