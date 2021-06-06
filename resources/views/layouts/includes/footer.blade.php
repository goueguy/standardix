@section("footer")
<footer class="static bottom-0 w-full h-auto bg-graystandardix">
    <div class="flex flex-row justify-between pt-3 pl-12">
        <div>
            <img src="{{asset("assets/images/logo.png")}}" class="h-24" alt="Standardix Logo"/>
            <p class="pt-2 text-sm">Standardix est une entreprise<br>
                d’intermediation entre les entreprises<br>
                et leurs clientèles. </p>
        </div>
        <div class="pt-12 pb-24 pl-8">
            <a href="{{route('offres')}}" class="pr-12 text-gray-800 uppercase pl-14">Accueil</a>
            <a href="#" class="pr-10 text-gray-800 uppercase">Standardix</a>
            <a href="{{route('register')}}" class="pr-10 text-gray-800 uppercase">Candidature spontanée</a>
            <a href="#" class="pr-10 text-gray-800 uppercase">Nos métiers</a>
            <a href="{{route('login')}}" class="pr-10 text-gray-800 uppercase">Connexion</a>
        </div>
    </div>
    <div class="w-4/5 pt-3 mx-auto border-b-2 border-gray-200"></div>
    <p class="pt-2 mx-auto text-center text-gray-500">Standardix @2021. Tous droits reservés. Framponné avec fierté par INFLUE </p>
</footer>
@endsection
