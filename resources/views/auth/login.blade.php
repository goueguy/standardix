@extends("layouts.template")
@section('title',"CONNEXION")
@section('content')

<div class="flex flex-row justify-between">
    <div class="relative w-screen">
        <img src="{{asset('assets/images/home-photo.png')}}" class="bg-gray-500 bg-no-repeat" alt="">
        <div class="absolute top-0 right-0 flex flex-col mt-20 mr-24">
            <div class="mx-auto text-center pt-36">
                <div class="flex flex-row items-center p-4 bg-white border border-transparent rounded-lg shadow cursor-pointer w-90">
                    <img src="{{asset('/assets/images/google.svg')}}" class="w-6">
                    <span class="pl-4 font-bold">Connectez-vous avec Google</span>
                </div>
                <form action="{{route('check.login')}}" method="POST">

                    @csrf
                    <div class="mb-4">
                        <p class="font-bold lg:mb-2 lg:mt-2">ou alors</p>
                        <p class="font-bold">E-mail</p>
                    </div>
                    <div class="flex flex-row justify-between p-4 mb-4 bg-white  @error('email') border border-red-600 @enderror rounded-lg shadow w-90">
                        <input type="email" name="email" class="border-0 focus:outline-none md:focus:placeholder-green-600" name="email" placeholder="votre@email.com" value="{{old('email')}}"/>
                        @error('email')
                        <span class="text-red-600" title="{{$message}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                        </span>
                    @enderror
                    </div>
                    <label class="font-bold lg:mt-12">Mot de passe</label>
                    <div class="flex flex-row justify-between p-4 bg-white @error('email') border border-red-600 @enderror rounded-lg shadow w-90">
                        <input type="password" name="password" class="border-0 focus:outline-none  md:focus:placeholder-green-600" name="email" placeholder="*************************" value="{{old('password')}}"/>
                        @error('password')
                            <span class="text-red-600" title="{{$message}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                            </span>
                        @enderror
                    </div>



                    <button type="submit" class="w-full p-3 font-bold bg-yellow-400 rounded-full shadow-lg lg:mt-8">Connecter</button>
                </form>
                <div class="lg:mt-6">
                    <p class="font-bold"><a href="#">Vous n'avez pas de compte ?</a> <a href="#">Créer compte ?</a></p>
                    <p class="font-bold"><a href="#">Oops? J'ai oublié mon mot de passe</a> </p>
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
