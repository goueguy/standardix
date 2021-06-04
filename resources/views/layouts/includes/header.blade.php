@section('header')
    <header>
        <!-- LOGO -->
        <div class="flex flex-row justify-between w-full">
            <div class="ml-12">
                <a href="{{url("/")}}"><img src="{{asset("assets/images/logo.png")}}" class="h-24 pt-4" alt="Standardix Logo"/></a>
            </div>
            <button class="p-3 lg:hidden">
                ICON
            </button>
            <!-- MENU LINKS -->
            <div class="mr-12 mt-14 inline-flex">
                <a href="{{route('offres')}}" class="pr-8 font-bold uppercase"><span>Accueil</span></a>
                <a href="#" class="pr-8 font-bold uppercase"><span>Standardix</span></a>
                <a href="{{route('candidature-spontanee')}}" class="pr-8 font-bold uppercase"><span>Candidature spontanée</span></a>
                <a href="#" class="pr-8 font-bold uppercase"><span>Nos métiers</span></a>
                <a href="#" class="pr-8 font-bold uppercase"><span>Contact</span></a>
                @auth
                   <a href="{{(Auth::user()->niveau_acces==1 || Auth::user()->niveau_acces==2) ? route('admin.dashboard') : route('candidats.dashboard')}}" class="font-bold justify-center flex"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg><span>{{Str::substr(Auth::user()->nom, 0, 1)}}{{Str::substr(Auth::user()->prenoms, 0, 1)}}.</span></a>
                @else
                   <a href="{{route('login')}}" class="font-bold  uppercase"><span>Connexion</span></a>
                @endauth
            </div>
        </div>
    </header>
@endsection
