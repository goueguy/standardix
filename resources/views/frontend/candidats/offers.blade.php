@extends("layouts.candidats")
@section('title',"Candidats::Offres lancées")
@section('content')

<div class="p-5 w-3/4 mt-5">
    <h2 class="mb-5 font-bold border-l-4 border-green-600"> <span class="pl-2">OFFRES LANCÉES</span></h2>
    <table class="w-full table-auto border border-green-9 border-collapse">
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

@endsection

