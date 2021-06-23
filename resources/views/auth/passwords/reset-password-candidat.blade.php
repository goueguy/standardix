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
                        <div class="bg-red-500 p-2 text-white rounded-full">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <form action="{{ route('candidatures.password.update',$token) }}" method="POST">
                    @csrf
                        <label class="font-bold lg:mt-12">Mot de passe</label>
                        <div class="flex flex-row justify-between p-4 mb-4 bg-white  @error('password') border border-red-600 @enderror rounded-lg shadow w-90">
                            <input type="password" name="password" class="border-0 focus:outline-none md:focus:placeholder-green-600"  placeholder="**************" value="{{old('password')}}"/>
                            @error('password')
                            <span class="text-red-600" title="{{$message}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                            </span>
                        @enderror
                        </div>
                        <label class="font-bold lg:mt-12">Confirmer Mot de passe</label>
                        <div class="flex flex-row justify-between p-4 mb-4 bg-white  @error('password_confirmation') border border-red-600 @enderror rounded-lg shadow w-90">
                            <input type="password" name="password_confirmation" class="border-0 focus:outline-none md:focus:placeholder-green-600"  placeholder="**************" value="{{old('password_confirmation')}}"/>
                            @error('password_confirmation')
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
                </div>
            </div>
    </div>
    </div>


@endsection
