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
            <div class="inline-flex mr-12 mt-14">
                <a href="{{route('offres')}}" class="pr-8 font-bold uppercase"><span>Accueil</span></a>
                <a href="#" class="pr-8 font-bold uppercase"><span>Standardix</span></a>
                <a href="{{route('candidature-spontanee')}}" class="pr-8 font-bold uppercase"><span>Candidature spontanée</span></a>
                <a href="#" class="pr-8 font-bold uppercase"><span>Nos métiers</span></a>
                <a href="#" class="pr-8 font-bold uppercase"><span>Contact</span></a>
                @auth
                    <button type="button" id="dropdown" href="{{(Auth::user()->niveau_acces==1 || Auth::user()->niveau_acces==2) ? route('admin.dashboard') : route('candidats.dashboard')}}" class="flex justify-center font-bold"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 dropdown dropdown:hover dropdown-menu:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg><span>{{Str::substr(Auth::user()->nom, 0, 1)}}{{Str::substr(Auth::user()->prenoms, 0, 1)}}.</span></button>
                @else
                    <a href="{{route('login')}}" class="font-bold uppercase"><span>Connexion</span></a>
                @endauth
            </div>
        </div>
        <ul id="dropdown-menu" class="absolute right-0 hidden mr-12 text-xs">
            <li>
                <a class="flex flex-row px-2 my-2" href="{{route('candidats.dashboard')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row px-2 my-2 hover:opacity-75">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="ml-2">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit">Deconnexion</button>
                        </form>
                    </span>
                </a>
            </li>
        </ul>
    </header>
@endsection
@push('dropdown')
<script>
    let btn = document.getElementById("dropdown");
    let dropdownMenu = document.getElementById("dropdown-menu");
    btn.addEventListener("click",()=>dropdownMenu.classList.toggle("hidden"));
</script>
@endpush
