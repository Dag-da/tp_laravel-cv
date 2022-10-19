@php
    use App\Http\Controllers\IdentityController;
    foreach ($identities as $key => $identity) :
        $about = IdentityController::sub_text($identity->about, 100);
        $identities[$key]['about'] = $about;   
    endforeach;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gérer votre identité') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class='hover:text-emerald-500 text-xl' href='{{ route('identity.create') }}'><i class="fa-solid fa-file-circle-plus mr-2"></i>Enregister une nouvelle présentation</a>
                    <div class="mt-5 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse ($identities as $identity)
                            <x-dashboard.card-identity :id='$identity->id' :firstName='$identity->first_name' :lastName='$identity->last_name' :adress='$identity->adress' :zipCode='$identity->zip_code' :city='$identity->city' :email='$identity->email' :phone='$identity->phone' :about='$identity->about' />
                        @empty
                            <p>Il n'y a pas encore de présentation enregistrée : <a href="{{ route('identity.create') }}"><i class="fa-solid fa-file-circle-plus"></i> créer une présentation</a>.</p>
                        @endforelse
                        {{ $identities->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
