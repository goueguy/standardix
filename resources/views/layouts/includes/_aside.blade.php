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
        <span class="font-italic">Bienvenu {{Auth::user()->nom}} {{Auth::user()->prenoms}} !</span>
    </div>
    </div>
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt "></i>
            <p class="text-sm">
            Tableau de bord
            </p>
        </a>
        </li>
        {{-- <li class="nav-item">
        <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Offres
            <span class="right badge badge-danger">New</span>
            </p>
        </a>
        </li> --}}
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy white"></i>
            <p class="text-sm white">
            Offres
            <i class="fas fa-angle-left right"></i>
            {{-- <span class="badge badge-info right">6</span> --}}
            </p>
        </a>
        <ul class="ml-3 nav nav-treeview">
            <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                <p class="text-sm white">Toutes les offres</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                <p  class="text-sm white">Ajouter une offre</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pages/layout/boxed.html" class="nav-link">
                {{-- <i class="far fa-circle nav-icon"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="text-sm text-white nav-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
                <p class="text-sm white">Offres lancées</p>
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
