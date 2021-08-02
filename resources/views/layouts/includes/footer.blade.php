
<footer class="bg-graystandardix">
    <div class="flex flex-row items-center m-12">
        <div>
            <img src="{{asset("assets/images/logo.png")}}" class="h-24" alt="Standardix Logo"/>
            <p class="pt-2 text-sm">Standardix est une entreprise<br>
                d’intermediation entre les entreprises<br>
                et leurs clientèles. </p>
        </div>
        <div class="pt-12 ml-auto">
            <a href="{{route('offres')}}" class="pr-12 text-gray-800 uppercase lg:pl-14 sm:pl-0 md:pl-0 ">Accueil</a>
            <a href="#" class="pr-10 text-gray-800 uppercase">Standardix</a>
            <a href="{{route('register')}}" class="pr-10 text-gray-800 uppercase">Candidature spontanée</a>
            <a href="#" class="pr-10 text-gray-800 uppercase">Nos métiers</a>
            <a href="{{route('login')}}" class="pr-10 text-gray-800 uppercase">Connexion</a>
        </div>
    </div>
    <div class="w-4/5 pt-3 mx-auto border-b-2 border-gray-200"></div>
    <p class="pt-2 mx-auto text-center text-gray-500">Standardix @<?php echo date('Y');?>. Tous droits reservés. Framponné avec fierté par INFLUE </p>
</footer>

