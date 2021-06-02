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
        <div class="mt-12 mr-12">
            <a href="{{route('offres')}}" class="pr-12 font-bold"><span>HOME</span></a>
            <a href="#" class="pr-12 font-bold"><span>STANDARDIX</span></a>
            <a href="{{route('nous-rejoindre')}}" class="pr-12 font-bold"><span>NOUS REJOINDRE</span></a>
            <a href="#" class="pr-12 font-bold"><span>NOS MÉTIERS</span></a>
            <a href="#" class="pr-12 font-bold -12"><span>CONTACT</span></a>
            <a href="{{route('connexion')}}" class="font-bold "><span>CONNEXION</span></a>
        </div>
    </div>
</header>
