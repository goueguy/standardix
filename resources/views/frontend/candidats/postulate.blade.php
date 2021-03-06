@extends("layouts.candidats")
@section('title',"CANDIDATS::POSTULER")

@section('content')
<div class="">
    <h1 class="py-10 text-4xl font-bold text-center text-green-700 ">POSTULER À L'OFFRE {{$offre->titre}}</h1>
    <div class="flex justify-center px-4 ">

            <div class="">
                    @if(session('message'))
                        <div class="w-3/4 p-3 mb-4 text-center text-white bg-green-500 rounded-full" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
                    @if(session('error'))
                    <div class="w-3/4 p-3 mb-4 text-center text-white bg-red-500 rounded-full" role="alert">
                        {{session('error')}}
                    </div>
                @endif
                <form action="{{route('candidats.postulate.store', $offre->slug)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-5">
                        <input type="text" name="nom" placeholder="Votre nom" class="@error('nom')border-red-500 @enderror border w-1/2 px-10 py-3 text-lg text-left text-gray-700 placeholder-gray-500 shadow-md rounded-2xl focus:outline-none" readonly value="{{Auth::user()->nom}}">
                    </div>

                    <div class="mb-5">
                        <input type="text" name="prenoms" placeholder="Votre prenoms" class="@error('prenoms') border-red-500 @enderror border w-1/2 px-10 py-3 text-lg text-gray-700 placeholder-gray-500 shadow-md rounded-2xl focus:outline-none" readonly value="{{Auth::user()->prenoms}}">
                    </div>

                    <div class="mb-5">
                        <input type="email" name="email" placeholder="Votre email" class="@error('email') border-red-500 @enderror border w-1/2 px-10 py-3 text-lg text-left text-gray-700 placeholder-gray-500 shadow-md rounded-2xl focus:outline-none" readonly value="{{Auth::user()->email}}">
                    </div>

                    <div class="flex items-center justify-start mb-5">
                        <select name="metiers" class="@error('metiers') border-red-500 @enderror border w-1/2 px-10 py-3 text-lg text-left text-gray-500 shadow-md appearance-none rounded-2xl focus:outline-none">
                            <option value="" class="capitalize">Le metier souhaité</option>
                            @foreach ($metiers as  $metier)
                                <option value="{{$metier->id}}">{{$metier->nom_metier}}</option>
                            @endforeach
                        </select>
                        <div class="inset-y-0 right-0 flex items-center px-2 -mt-3 -ml-10 text-gray-700 pointer-events-none">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>

                    <div class="@error('cv') border-red-500 @enderror border flex w-1/2 px-10 py-3 mb-5 text-lg text-left bg-white shadow-md rounded-2xl focus:outline-none">
                        <label for="cv" class="flex justify-between w-full">
                            <span class="text-medium">Deposer votre CV</span>
                            <input type="file" id="cv" name="cv" class="hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                        </svg>
                        </label>
                        @error('cv')
                            <span class="text-red-600 relative -right-6" title="{{$message}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                            </span>
                        @enderror
                    </div>
                    <small class="text-gray-500 text-xs italic relative -top-5 underline">NB: CV au format pdf,PDF;taille max:2Mo</small>
                    <div class="flex">
                        <textarea name="motivation" id="" placeholder="Votre motivation" class="@error('motivation') border-red-600 @enderror border w-full p-5 mb-5 placeholder-gray-500 shadow-md resize-none h-60 rounded-2xl focus:outline-none"></textarea>
                        @error('motivation')
                        <span class="text-red-600 relative right-10 top-4" title="{{$message}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                        </span>
                        @enderror
                    </div>

                    <div class="px-32 mb-10">
                        <button type="submit" name="valider" class="py-3 mt-5 font-bold text-center transition duration-500 bg-yellow-300 rounded-full shadow-md text-md px-28 focus:outline-none">Soumettre</button>
                    </div>
                </form>
            </div>
            <div class="w-1/3">
                <img src="{{asset('/assets/images/Group_14.png')}}" alt="">
            </div>
    </div>
</div>
@endsection
@push('metier')
<style>
    body{
        background-color: #f3f4f6;
    }
</style>
@endpush














