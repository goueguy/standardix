@section('header')
    <header>
        <!-- LOGO -->
        <div class="flex flex-row justify-between w-full">
            <div class="ml-12">
                <img src="{{asset("assets/images/logo.png")}}" class="h-24 pt-4" alt="Standardix Logo"/>
            </div>
            <button class="p-3 lg:hidden">
                ICON
            </button>
            <!-- MENU LINKS -->
            <div class="mr-12 mt-14">
                <a href="{{route('offres')}}" class="pr-12 font-bold uppercase"><span>Accueil</span></a>
                <a href="#" class="pr-12 font-bold uppercase"><span>Standardix</span></a>
                <a href="{{route('candidature-spontanee')}}" class="pr-12 font-bold uppercase"><span>Candidature spontanée</span></a>
                <a href="#" class="pr-12 font-bold uppercase"><span>Nos métiers</span></a>
                <a href="#" class="pr-12 font-bold uppercase"><span>Contact</span></a>
                <a href="{{route('login')}}" class="font-bold uppercase"><span>Connexion</span></a>
            </div>
        </div>
    </header>
@endsection
