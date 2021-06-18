@extends("layouts.candidats")
@section('title',"CANDIDATS::PARAMETRES")
@section('content')
<!--Informations Personnelles-->

<div class="flex flex-col ">
    <div class="p-3 mt-5">
        <h2 class="mb-4 font-bold uppercase border-l-4 border-green-600"><span class="pl-2">Informations Personnelles</span></h2>
        @if(session("success"))
            <div class="p-2 mb-3 text-center text-white bg-gray-400 rounded-full">
                {{session("success")}}
            </div>
        @endif
        <form action="{{route('candidats.parametres.change',Auth::user()->id)}}" method="POST">
            @csrf
            <div class="flex flex-row space-x-2">
                <input type="text" name="nom" class="@error('nom') border-red-500 @enderror w-1/2 p-2 mb-2 bg-white border rounded-full  focus:outline-none" placeholder="Nom" value="{{Auth::user()->nom}}"/>
                <input type="text" name="prenoms" class="@error('prenoms')border-red-500 @enderror w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none" placeholder="Prénoms" value="{{Auth::user()->prenoms}}" />
            </div>
            <div class="flex flex-row justify-between">
            @error('nom')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            @error('prenoms')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            </div>
            <div class="flex flex-row space-x-2">
                <input type="text" name="motivation" class="@error('motivation') border-red-500 @enderror w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none" placeholder="Motivation" value="{{Auth::user()->motivation}}"/>
                <input type="tel" name="telephone" class="@error('telephone')  border-red-500 @enderror w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none" placeholder="Contact" value="{{Auth::user()->contact}}"/>
            </div>
            <div class="flex flex-row justify-between">
                @error('motivation')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                @error('telephone')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex flex-row space-x-2">
                <input type="text" name="lieu_habitation" class="@error('lieu_habitation')  border-red-500 @enderror w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none" placeholder="Lieu d'Habitation"  value="{{Auth::user()->lieu_habitation}}"/>
                <select name="domaine" class="@error('domaine') border-red-500 @enderror w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none">
                    @if(Auth::user()->domaine_emploi_id)
                        @foreach($domaines as $domaine)
                        <option value="{{$domaine->id}}" {{ $domaine->id==Auth::user()->domaine->id ? "selected" : 1}}>{{$domaine->nom}}</option>
                        @endforeach
                    @else
                        <option value="">------Domaine d'Emploi-----</option>
                        @foreach($domaines as $domaine)
                            <option value="{{$domaine->id}}">{{$domaine->nom}}</option>
                        @endforeach
                    @endif

                </select>
                {{-- <input type="text" name="domaine" class="@error('domaine')border-red-500 @enderror w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none" placeholder="Domaine" value="{{Auth::user()->domaine->nom}}" /> --}}
            </div>
            <div class="flex flex-row justify-between">
                @error('lieu_habitation')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                @error('domaine')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                </div>
            <div>
                <button type="submit" class="w-1/6 p-2 text-white bg-yellow-500 rounded-full">CHANGER</button>
            </div>
        </form>
    </div>
    {{-- <!--Mot de passe-->
    <div class="p-3 mt-5">
        <h2 class="mb-4 font-bold uppercase border-l-4 border-green-600"><span class="pl-2">Mot de passe</span></h2>
        <form action="#" method="POST">
            <div class="flex flex-row space-x-2">
                <input type="passsword" name="password" class="w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none" placeholder="Mot de passe" />
                <input type="passwordd" name="confirmation_password" class="w-1/2 p-2 mb-2 bg-white border rounded-full focus:outline-none" placeholder="Confirmer Mot de passe" />
            </div>
             <button type="submit" class="w-1/6 p-2 text-white bg-yellow-500 rounded-full">CHANGER</button>
        </form>
    </div> --}}
</div>
@endsection
