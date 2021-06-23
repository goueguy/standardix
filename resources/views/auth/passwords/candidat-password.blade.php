@extends("layouts.template")
@section('title',"CANDIDATS::Mot de passe Oublié")
@section('content')


<div class="flex flex-row justify-between">
    <div class="relative w-screen">
        <img src="{{asset('assets/images/home-photo.png')}}" class="bg-gray-500 bg-no-repeat" alt="">
        <div class="absolute top-0 right-0 flex flex-col mt-20 mr-24">
            <div class="mx-auto text-center pt-36">
                <div class="m-4">
                    @if(session('success'))
                        <div class="bg-green-500 p-2 text-white rounded-full">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <form action="{{ route('candidatures.send-password-link') }}" method="POST">
                    @csrf
                        <label class="font-bold lg:mt-12">Adresse Email</label>
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
                    <button type="submit" class="w-full p-3 font-bold bg-yellow-400 rounded-full shadow-lg lg:mt-8">Valider</button>
                </form>
                <div class="lg:mt-6">
                    <p class="font-bold"><a href="{{route('register')}}"> Avez-vous déjà un compte ?</a> <a href="{{route('login')}}">Connectez-vous</a></p>
                    <p class="font-bold"><a href="{{route('candidatures.forget-password')}}">Oops? J'ai oublié mon mot de passe</a> </p>
                </div>
            </div>
    </div>
    </div>


@endsection
