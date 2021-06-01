@extends("layouts.template")
@section('title',"NOS MÉTIERS")
@section('content')
<div class="">
    <h1 class="text-center text-4xl font-bold py-10 text-green-700 ">POSTULER À UN MÉTIER</h1>
    <div class=" px-4 flex justify-center">
            <div class="">
                <form action="">
                    <div class="mb-5">
                        <input type="text" name="name" placeholder="Votre nom" class="rounded-2xl text-left shadow-md w-1/2 text-gray-700 py-3 text-lg px-10 placeholder-gray-500 focus:outline-none">
                    </div>
                    <div class="mb-5">
                        <input type="text" name="firstname" placeholder="Votre prenoms" class="rounded-2xl w-1/2 shadow-md  text-gray-700 py-3 text-lg px-10 focus:outline-none placeholder-gray-500">
                    </div>
                    <div class="mb-5">
                        <input type="email" name="email" placeholder="Votre email" class="rounded-2xl text-left w-1/2 shadow-md text-gray-700 py-3 text-lg px-10 focus:outline-none placeholder-gray-500">
                    </div>
                    <div class="flex justify-start items-center mb-5">
                        <select class="appearance-none rounded-2xl text-left w-1/2 shadow-md  text-gray-500 py-3 text-lg px-10 focus:outline-none">
                            <option>Le metier souhaité</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                        <div class="pointer-events-none -ml-10 -mt-3 inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <div class="text-left w-1/2 shadow-md  flex rounded-2xl bg-white py-3 text-lg px-10 focus:outline-none mb-5">
                        <label for="image" class="w-full flex justify-between">
                            <span class="text-medium">Deposer votre CV</span>
                            <input type="file" id="image" name="image" class="hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                        </svg>
                        </label>
                    </div>
                    <textarea name="" id="" placeholder="Votre motivation" class="mb-5 resize-none w-full h-60 placeholder-gray-500 shadow-md p-5 rounded-2xl focus:outline-none"></textarea>
                    <div class="px-32 mb-10">
                        <button type="submit" name="valider" class="mt-5  rounded-full shadow-md text-center py-3 font-bold  text-md px-28  focus:outline-none bg-yellow-300  transition duration-500">Connecter</button>
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














