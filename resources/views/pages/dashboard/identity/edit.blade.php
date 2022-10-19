<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier cette présentation') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="border-b border-gray-200">
                    <form action="{{ route('identity.update', $identity) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <x-dashboard.wrapper-inputs>
                            <x-dashboard.input type='text' name='firstName' placeholder='Prénom :' :edit='$identity->first_name' /> 
                            <x-dashboard.input type='text' name='lastName' placeholder='Nom :' :edit='$identity->last_name' /> 
                        </x-dashboard.wrapper-inputs>
                        <x-dashboard.wrapper-inputs>
                            <x-dashboard.input type='text' name='adress' placeholder='Adresse :' :edit='$identity->adress' />
                            <div class="flex">
                                <x-dashboard.input type='text' name='zipCode' placeholder='Code postal :' :edit='$identity->zip_code' />
                                <x-dashboard.input type='text' name='city' placeholder='Ville :' :edit='$identity->city' />
                            </div>
                        </x-dashboard.wrapper-inputs>
                        <x-dashboard.wrapper-inputs>
                            <x-dashboard.input type='email' name='email' placeholder='Email :' :edit='$identity->email' /> 
                            <x-dashboard.input type='text' name='phone' placeholder='Téléphone :' :edit='$identity->phone' /> 
                        </x-dashboard.wrapper-inputs>
                        <x-dashboard.wrapper-inputs>
                            <textarea name="about" cols="30" rows="10" placeholder="Votre présentation :" class="block w-full py-4 px-5 rounded-xl border border-gray-500">{{ old('about', $identity->about) }}</textarea>
                            <x-dashboard.msg-error input='about' />
                        </x-dashboard.wrapper-inputs>
                        <x-dashboard.wrapper-inputs>
                            <button type="submit">Envoyer</button>
                        </x-dashboard.wrapper-inputs>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
