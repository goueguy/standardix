@extends("layouts.template")
@section('title',"CONNEXION")
@section('content')

<div class="flex flex-row justify-between w-full">
    <div class="relative">
        <img src="{{asset('assets/images/home-photo.png')}}" class="bg-gray-500 bg-no-repeat" alt="">
        <div class="absolute top-0 right-0 flex flex-col mt-24 mr-12">
            <div class="mx-auto text-center pt-36">
                <div class="flex flex-row items-center p-4 bg-white border border-transparent rounded-lg shadow cursor-pointer w-90">
                    <img src="{{asset('/assets/images/google.svg')}}" class="w-6">
                    <span class="pl-4 font-bold">Connectez-vous avec Google</span>
                </div>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <p class="font-bold lg:mb-2 lg:mt-2">ou alors</p>
                        <p class="font-bold">E-mail</p>
                    </div>
                    <div class="flex flex-row items-center p-4 mb-4 bg-white border-transparent rounded-lg shadow w-90">
                        <input type="email" class="border-0 focus:outline-none md:focus:placeholder-green-600" name="email" placeholder="votre@email.com"/>
                    </div>
                    <label class="font-bold lg:mt-12">Mot de passe</label>
                    <div class="flex flex-row items-center p-4 bg-white border border-transparent rounded-lg shadow w-90">
                        <input type="password" class="border-0 focus:outline-none md:focus:placeholder-green-600" name="email" placeholder="*************************"/>
                    </div>
                    <button class="w-full p-3 font-bold bg-yellow-400 rounded-full shadow-lg lg:mt-8">Connecter</button>
                </form>
                <div class="lg:mt-6">
                    <p class="font-bold"><a href="#">Vous n'avez pas de compte ?<a/> <a href="#">Créer compte ?<a/></p>
                    <p class="font-bold"><a href="#">Oops? J'ai oublié mon mot de passe<a/> </p>
                </div>
            </div>
    </div>
</div>
@endsection


