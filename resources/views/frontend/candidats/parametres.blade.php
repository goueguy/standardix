@extends("layouts.candidats")
@section('title',"CANDIDATS::PARAMETRES")
@section('content')
<!--Informations Personnelles-->
<div class="flex flex-col w-3/4">
    <div class="p-3  mt-5">
        <h2 class="font-bold mb-4 uppercase border-l-4 border-green-600"><span class="pl-2">Informations Personnelles</span></h2>
        <form action="#" method="POST">
            <div class="flex flex-row space-x-2">
                <input type="text" name="nom" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Nom" />
                <input type="text" name="prenoms" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Prénoms" />
            </div>
            <div class="flex flex-row space-x-2">
                <input type="email" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Email" />
                <input type="tel" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Contact" />
            </div>
            <div class="flex flex-row space-x-2">
                <input type="text" name="lieu_habitation" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Lieu d'Habitation" />
                <input type="text" name="domaine" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Domaine" />
            </div>
           <div>
                <button type="submit" class="p-2 bg-yellow-500 rounded-full text-white w-1/6">CHANGER</button>
           </div>
        </form>
    </div>
    <!--Mot de passe-->
    <div class="p-3 mt-5">
        <h2 class="font-bold mb-4 uppercase  border-l-4 border-green-600"><span class="pl-2">Mot de passe</span></h2>
        <form action="#" method="POST">
            <div class="flex flex-row space-x-2">
                <input type="passsword" name="password" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Mot de passe" />
                <input type="passwordd" name="confirmation_password" class="rounded-full mb-2 w-1/2 p-2 border bg-white focus:outline-none" placeholder="Confirmer Mot de passe" />
            </div>
             <button type="submit" class="p-2 bg-yellow-500 rounded-full text-white w-1/6">CHANGER</button>
        </form>
    </div>
</div>
@endsection