@extends("layouts.template")
@section('title',"DASHBOARD CANDIDATS")
@section('header')

@stop
@section('content')
<div class="flex flex-col">
            <div class="relative min-h-screen md:flex">
                <!-- sidebar -->
            <div class="w-1/4 px-4 space-y-6 sidebar bg-primary align-items-center ">

                <!-- cercle -->
                <div class="flex flex-wrap items-stretch justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-16 h-16 mt-5 rounded-full bg-yellow">
                        </div>
                        <span class="flex items-center justify-center my-2 text-center text-white cursor-pointer text-md hover:opacity-75">
                    <span>ID: {{Auth::user()->nom}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                        </span>
                    </div>
                    @if (Auth::user()->niveau_acces==1 || Auth::user()->niveau_acces==2)
                    <div class="flex flex-col p-10 mt-10 mb-0 text-white text-md">
                        <a href="{{route('admin.dashboard')}}" class="flex flex-row px-2 my-2 hover:opacity-75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                            <span class="ml-3">Aller vers espace administration</span>
                        </a>
                        <div class="inline-flex items-center">
                            <a href="#"  class="flex flex-row px-2 my-2 hover:opacity-75">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="ml-3">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit">Deconnexion</button>
                                    </form>
                                </span>
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="flex flex-col p-10 mt-10 mb-0 text-white text-md">
                        <a href="#" class="flex flex-row px-2 my-2 hover:opacity-75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                            <span class="ml-3">Offres lancées</span>
                        </a>
                        <a href="#" class="flex flex-row px-2 my-2 hover:opacity-75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3">Mes Souscriptions</span>
                        </a>
                        <a href="#" class="flex flex-row px-2 my-2 hover:opacity-75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3">Mes RDV</span>
                        </a>

                        <a href="#" class="flex flex-row px-2 my-2 hover:opacity-75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="ml-3">Paramètres</span>
                        </a>
                        <div class="inline-flex items-center">
                            <a href="#"  class="flex flex-row px-2 my-2 hover:opacity-75">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="ml-3">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit">Deconnexion</button>
                                    </form>
                                </span>
                            </a>
                        </div>
                    </div>
                    @endif
                    <footer class="flex flex-row justify-center text-xs text-white">
                        <span class="flex flex-row px-5 mt-32 hover:opacity-75">
                            <a href="#">ACCUEIL</a>
                        </span>
                        <span class="flex flex-row px-5 mt-32 hover:opacity-75">
                            <a href="#">CONTACTS</a>
                        </span>
                        <span class="flex flex-row px-5 mt-32 hover:opacity-75">
                            <a href="#">CGU</a>
                        </span>
                    </footer>
                </div>
            </div>
            <div class="block w-3/4 p-10 text-xl text-center bg-white">
                <div>
                    <span class="flex justify-end mr-6 flex-end">
                        <svg class="text-opacity-100 w-7 h-7 text-medium" viewBox="0 0 88 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44 101C47.3152 101 50.4946 99.683 52.8388 97.3388C55.183 94.9946 56.5 91.8152 56.5 88.5H31.5C31.5 91.8152 32.817 94.9946 35.1612 97.3388C37.5054 99.683 40.6848 101 44 101ZM50.2187 7.86876C50.306 6.99972 50.2101 6.12204 49.9373 5.29234C49.6645 4.46263 49.2208 3.69932 48.6349 3.05162C48.0489 2.40392 47.3337 1.88622 46.5354 1.53191C45.7371 1.1776 44.8734 0.994537 44 0.994537C43.1266 0.994537 42.2629 1.1776 41.4646 1.53191C40.6663 1.88622 39.9511 2.40392 39.3651 3.05162C38.7792 3.69932 38.3355 4.46263 38.0627 5.29234C37.7899 6.12204 37.694 6.99972 37.7813 7.86876C30.717 9.30564 24.3664 13.1398 19.8048 18.7219C15.2432 24.304 12.7509 31.2911 12.75 38.5C12.75 45.3625 9.625 76 0.25 82.25H87.75C78.375 76 75.25 45.3625 75.25 38.5C75.25 23.375 64.5 10.75 50.2187 7.86876V7.86876Z" fill="#2E3A59"/>
                            </svg>
                            <span class="absolute w-3 h-3 my-1 mt-1 border-2 border-white rounded-full bg-medium z-2"></span>
                    </span>
                </div>
                    <div class="mt-5">
                        @if (session('danger'))
                            <div class="bg-red-300 text-white block text-center">
                                <span>{{session('danger')}}</span>
                            </div>
                        @endif
                        <h1 class="text-opacity-100 capitalize text-medium">HELLO, {{Auth::user()->nom.' '.Auth::user()->prenoms}}</h1>
                        <p class="font-light text-opacity-100 text-medium">Nous vous souhaitons plein de succès avec nous !</p>
                    </div>
                    <div class="flex flex-row mt-10 border border-t-0 border-b-0 border-l-4 border-r-0 border-yellow">
                        <span class="pl-2 font-medium text-primary">Offres lancées</span>
                    </div>
            </div>
        </div>
</div>
@endsection
@section('footer')

@stop

