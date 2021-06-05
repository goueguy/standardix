@extends("layouts.candidats")
@section('title',"CANDIDATS::DASHBOARD")
@section('content')

<div class="block w-3/4 p-10 text-xl text-center bg-white">
    <div>
        <span class="flex justify-end mr-6 flex-end">
            <svg class="text-opacity-100 w-7 h-7 text-medium" viewBox="0 0 88 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44 101C47.3152 101 50.4946 99.683 52.8388 97.3388C55.183 94.9946 56.5 91.8152 56.5 88.5H31.5C31.5 91.8152 32.817 94.9946 35.1612 97.3388C37.5054 99.683 40.6848 101 44 101ZM50.2187 7.86876C50.306 6.99972 50.2101 6.12204 49.9373 5.29234C49.6645 4.46263 49.2208 3.69932 48.6349 3.05162C48.0489 2.40392 47.3337 1.88622 46.5354 1.53191C45.7371 1.1776 44.8734 0.994537 44 0.994537C43.1266 0.994537 42.2629 1.1776 41.4646 1.53191C40.6663 1.88622 39.9511 2.40392 39.3651 3.05162C38.7792 3.69932 38.3355 4.46263 38.0627 5.29234C37.7899 6.12204 37.694 6.99972 37.7813 7.86876C30.717 9.30564 24.3664 13.1398 19.8048 18.7219C15.2432 24.304 12.7509 31.2911 12.75 38.5C12.75 45.3625 9.625 76 0.25 82.25H87.75C78.375 76 75.25 45.3625 75.25 38.5C75.25 23.375 64.5 10.75 50.2187 7.86876V7.86876Z" fill="#2E3A59"/>
                </svg>
                <span class="absolute w-3 h-3 my-1 mt-1 border-2 border-white rounded-full bg-medium z-2"></span>
        </span>
    </div>
    <div class="mt-5">
        @if (session('danger'))
            <div class="block text-center text-white bg-red-300">
                <span>{{session('danger')}}</span>
            </div>
        @endif
        <h1 class="text-opacity-100 capitalize text-medium">HELLO, {{Auth::user()->nom.' '.Auth::user()->prenoms}}</h1>
        <p class="font-light text-opacity-100 text-medium">Nous vous souhaitons plein de succès avec nous !</p>
    </div>
    <div class="flex flex-row mt-10 border border-t-0 border-b-0 border-l-4 border-r-0 border-yellow">
        <span class="pl-2 font-medium text-primary">Offres lancées</span>
    </div>

<div class="w-full mt-5">
    <table class="table-auto border border-green-9 border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border border-gray-400 text-sm">N°</th>
                <th class="p-2 border border-gray-400 text-sm">Titre</th>
                <th class="p-2 border border-gray-400 text-sm">Description</th>
                <th class="p-2 border border-gray-400 text-sm">Date Edition</th>
                <th class="p-2 border border-gray-400 text-sm">Date Limite</th>
                <th class="p-2 border border-gray-400 text-sm">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-2 border border-gray-400">1</td>
                <td class="p-2 border border-gray-400 text-sm">FORMATEUR SÉNIOR BILLINGUE</td>
                <td class="p-2 border border-gray-400 text-sm">
                    Dans le cadre d’un programme stratégique de développement de nos activités, nous recrutons un développeur web et mobile.
                </td>
                <td class="p-2 border border-gray-400 text-sm">07-06-2021</td>
                <td class="p-2 border border-gray-400 text-sm">09-06-2021</td>
                <td class="p-2 border border-gray-400">
                    <a href="#" class="text-red-500 flex"> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-center text-sm">Détail</span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection