<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer une présentation') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('identity.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-xl font-bold text-gray-800">Créer votre carte d'identité</h2>
                        <div class="p-10 border-b border-gray-200 flex">
                            <x-dashboard.input type='text' name='firstName' placeholder='Prénom :' /> 
                            <x-dashboard.input type='text' name='lastName' placeholder='Nom :' /> 
                        </div>
                        <div class="p-10 border-b border-gray-200">
                            <x-dashboard.input type='text' name='adress' placeholder='Adresse :' />
                            <div class="flex">
                                <x-dashboard.input type='text' name='zipCode' placeholder='Code postal :' />
                                <x-dashboard.input type='text' name='city' placeholder='Ville :' />
                            </div>
                        </div>
                        <div class="p-10 border-b border-gray-200">
                            <x-dashboard.input type='email' name='email' placeholder='Email :' edit='panini' /> 
                            <div class="">
                                <div class="flex mt-3">
                                    <div class="bg-gray-500 py-4 px-5 rounded-l-xl text-white max-h-14">+33</div>
                                    <input type="text" name="phone" id="" class="py-4 px-5 rounded-r-xl border border-gray-500 max-h-14" placeholder='Téléphone :' value={{ old('phone') }}>
                                </div>
                                <x-dashboard.msg-error input='phone' />
                            </div>
                        </div>
                        <div class="p-10 border-b border-gray-200">
                            <textarea name="about" cols="30" rows="10" placeholder="Votre présentation :" class="block w-full py-4 px-5 rounded-xl border border-gray-500">{{ old('about') }}</textarea>
                            <x-dashboard.msg-error input='about' />
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
