<!-- Main Sidebar Container -->
<aside style="background-color: #2E3A59" class="main-sidebar elevation-4">
<!-- Brand Logo -->
<a href="{{route('admin.dashboard')}}" class="brand-link">
<img src="{{asset('/assets/images/logo1.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="text-white brand-text font-weight-bold">Admin</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<div class="pb-3 mt-3 mb-3 user-panel d-flex">
    <div class="image">
        {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
    </div>
    <div class="white">
        <span class="font-italic">Bienvenu {{Auth::user()->nom}} !</span>
    </div>
</div>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{(request()->is('admin/dashboard') ? 'active' : '')}}">
                <i class="nav-icon fas fa-tachometer-alt "></i>
                <p class="text-sm">
                Tableau de bord
                </p>
            </a>
        </li>
            {{-- module user --}}
            <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/users') ? 'active menu-open' : '')}}">
                <i class="nav-icon fas fa-user white"></i>
                <p class="text-sm white">
                Utilisateurs
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.users.list')}}" class="nav-link {{(request()->is('admin/users') ? 'active' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    <p class="text-sm white">Liste Utilisateurs</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('admin.users.add')}}" class="nav-link {{(request()->is('admin/users/add') ? 'active' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    <p  class="text-sm white">Ajout Utilisateur</p>
                </a>
                </li>
                    <!-- categories Offres-->
                    <li class="nav-item">
                    <a href="#" class="nav-link {{(request()->is('admin/users/roles') ? 'active' : '')}}">
                        <svg class="text-sm text-white nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        <p class="text-sm white">
                        Categories Utilisateurs
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="ml-3 nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{route('admin.roles.create')}}" class="nav-link {{(request()->is('admin/users/roles') ? 'active menu-open' : '')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                            <p class="text-sm white">Rôles Disponibles</p>
                        </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>
        {{-- module candidatures --}}
        <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/candidatures*') ? 'active menu-open' : '')}}">
                <i class="nav-icon fas fa-newspaper white"></i>
                <p class="text-sm white">
                Candidatures
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.candidatures.list')}}" class="nav-link {{(request()->is('admin/candidatures') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    <p class="text-sm white">Liste Candidatures</p>
                </a>
                </li>
            </ul>

        </li>
        {{-- module offres --}}
        <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/offres*') ? 'active menu-open' : '')}}">
                <svg class="text-sm text-white nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                <p class="text-sm white">
                Offres
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
                </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.offres.list')}}" class="nav-link {{(request()->is('admin/offres') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    <p class="text-sm white">Liste Offres</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('admin.offres.add')}}" class="nav-link {{(request()->is('admin/offres/add') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    <p  class="text-sm white">Ajout Offre</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('admin.offres.lancees')}}" class="nav-link {{(request()->is('admin/offres/lancees') ? 'active menu-open' : '')}}">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <p class="text-sm white">Offres lancées</p>
                </a>
                </li>

                <!-- categories Offres-->
                <li class="nav-item">
                    <a href="#" class="nav-link {{(request()->is('admin/offres/categories*') ? 'active menu-open' : '')}}">
                        <svg class="text-sm text-white nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        <p class="text-sm white">
                        Categories Offres
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="ml-3 nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{route('admin.categorie.create')}}" class="nav-link {{(request()->is('admin/offres/categories/add') ? 'active menu-open' : '')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                            <p class="text-sm white">Liste Categories</p>
                        </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{--  module domaine emplois --}}
        <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/domaines') ? 'active menu-open' : '')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
                <p class="text-sm white">
                Domaines d'emploi
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
                </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.domaine.create')}}" class="nav-link {{(request()->is('admin/domaines') ? 'active menu-open' : '')}}">
                    <svg class="text-sm text-white nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                    <p class="text-sm white">Liste Domaines Emploi </p>
                </a>
                </li>
                {{-- <li class="nav-item">
                <a href="{{route('admin.domaine.create')}}" class="nav-link {{(request()->is('admin/domaines') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    <p  class="text-sm white">Ajout Domaine d'emploi</p>
                </a>
                </li> --}}
                {{-- <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
                    <p class="text-sm white">Offres lancées</p>
                </a>
                </li> --}}
            </ul>
        </li>
        {{-- module metiers--}}
        <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/metiers') ? 'active menu-open' : '')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
                <p class="text-sm white">
                Métiers
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
                </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.metier.create')}}" class="nav-link {{(request()->is('admin/metiers') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    <p class="text-sm white">Liste Métiers </p>
                </a>
                </li>
                {{-- <li class="nav-item">
                <a href="{{route('admin.metier.create')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    <p  class="text-sm white">Ajout Métiers</p>
                </a>
                </li> --}}
                {{-- <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
                    <p class="text-sm white">Offres lancées</p>
                </a>
                </li> --}}
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/rendez-vous') ? 'active menu-open' : '')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-sm white">
                Rendez-Vous
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
                </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.rendezvous.index')}}" class="nav-link {{(request()->is('admin/rendez-vous') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    <p class="text-sm white">Liste Rendez-Vous </p>
                </a>
                </li>
                {{-- <li class="nav-item">
                <a href="{{route('admin.rendezvous.index')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    <p  class="text-sm white">Ajout Rendez-Vous</p>
                </a>
                </li> --}}
                {{-- <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
                    <p class="text-sm white">Offres lancées</p>
                </a>
                </li> --}}
            </ul>
        </li>
        <!-- Paramètres -->
        <li class="nav-item">
            <a href="#" class="nav-link {{(request()->is('admin/users/parametres*') ? 'active menu-open' : '')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p class="text-sm white">
                Paramètres
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
                </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('admin.users.profil')}}" class="nav-link {{(request()->is('admin/users/parametres/profil') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <p class="text-sm white">Profil</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{route('admin.users.password')}}" class="nav-link {{(request()->is('admin/users/parametres/password') ? 'active menu-open' : '')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <p  class="text-sm white">Changer mot de passe</p>
                </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
