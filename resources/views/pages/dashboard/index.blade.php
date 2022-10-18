<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Tableau de bord
                </div>
                <nav class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        <li><a href="{{ route('identity.index')}}">Gérer votre identité</a></li>
                        <li><a href="{{ route('experience.index')}}">Gérer vos expériences professionnelles</a></li>
                        <li><a href="{{ route('formation.index')}}">Gérer vos formations</a></li>
                        <li><a href="{{ route('skill.index')}}">Gérer vos Compétences</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-app-layout>
