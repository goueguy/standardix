@extends("layouts.template")
@section('title',"INSCRIPTION CLIENTS")
@section('content')

<div class="flex flex-row justify-between">
<div class="relative w-screen">
    <img src="{{asset('assets/images/home-photo.png')}}" class="bg-gray-500 bg-no-repeat" alt="">
    <div class="absolute top-0 right-0 flex flex-col mt-20 mr-24">
        <div class="mx-auto text-center pt-36">
            <form action="{{ route('candidats.client.save') }}" method="POST">
                @csrf

                <label class="font-bold lg:mt-12">Nom de l'Entreprise</label>
                    <div class="flex flex-row justify-between p-4 mb-4 bg-white  @error('nom_entreprise') border border-red-600 @enderror rounded-lg shadow w-90">
                        <input type="text" name="nom_entreprise" class="border-0 focus:outline-none md:focus:placeholder-green-600"  placeholder="Nom" value="{{old('nom_entreprise')}}"/>
                        @error('nom_entreprise')
                        <span class="text-red-600" title="{{$message}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                        </span>
                    @enderror
                    </div>
                <label class="font-bold lg:mt-12">Email</label>
                <div class="flex flex-row justify-between p-4 mb-4 bg-white  @error('email') border border-red-600 @enderror rounded-lg shadow w-90">
                    <input type="email" name="email" class="border-0 focus:outline-none md:focus:placeholder-green-600"  placeholder="votre@email.com" value="{{old('email')}}"/>
                    @error('email')
                    <span class="text-red-600" title="{{$message}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                    </span>
                @enderror
                </div>
                <label class="font-bold lg:mt-12">Mot de passe</label>
                <div class="flex flex-row justify-between p-4 bg-white @error('password') border border-red-600 @enderror rounded-lg shadow w-90">
                    <input type="password" name="password" class="border-0 focus:outline-none md:focus:placeholder-green-600"  placeholder="*************************" value="{{old('password')}}"/>
                    @error('password')
                        <span class="text-red-600" title="{{$message}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                        </span>
                    @enderror
                </div>
                <label class="font-bold lg:mt-12">Confirmer mot de passe</label>
                <div class="flex flex-row justify-between p-4 mb-8 bg-white @error('password_confirmation') border border-red-600 @enderror rounded-lg shadow w-90">
                    <input type="password" name="password_confirmation" class="border-0 focus:outline-none md:focus:placeholder-green-600"  placeholder="*************************" value="{{old('password')}}"/>
                    @error('password')
                        <span class="text-red-600" title="{{$message}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="w-full p-3 font-bold bg-yellow-400 rounded-full shadow-lg lg:mt-8">S'inscrire</button>
            </form>
            <div class="lg:mt-6">
                <p class="font-bold"><a href="{{route('register')}}"> Avez-vous d??j?? un compte ?</a> <a href="{{route('login')}}">Connectez-vous</a></p>
                <p class="font-bold"><a href="#">Oops? J'ai oubli?? mon mot de passe</a> </p>
            </div>
        </div>
</div>
</div>
@endsection

@push('header-style')
<style>
body{
background-color:#f9f9f9;
}
</style>
@endpush
