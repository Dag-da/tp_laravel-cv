@props([
    'id',
    'firstName',
    'lastName',
    'adress',
    'zipCode',
    'city',
    'email',
    'phone',
    'about',
])


<div class="card_identity p-6 rounded-lg bg-gray-100 shadow">
    <div class="flex justify-between">
        <p class="text-xl font-semibold">{{ $firstName }} <span class="uppercase font-bold">{{ $lastName }}</span></p>
        <div class="flex">
            <a href="{{ route('identity.edit', $id) }}" class="hover:text-blue-700"><i class="fa-sharp fa-solid fa-file-pen mr-2"></i></a>
            <x-dashboard.btn-delete route='identity.destroy' :item='$id' />
        </div>
    </div>
    <div class="card_items">
        <i class="fa-solid fa-location-dot"></i>
        <p class="">{{ $adress }},</p>
        <p class="">{{ $zipCode }} {{ $city }}</p>
    </div>
    <div class="card_items">
        <i class="fa-solid fa-at"></i>
        <p>{{ $email }}</p>
    </div>
    <div class="card_items">
        <i class="fa-solid fa-phone"></i>
        <p>+33{{ $phone }}</p>
    </div>
    <div class="bg-gray-200 rounded-lg card_about">
        <span class="text-gray-400">“</span>
        <p>{!! nl2br(e($about)) !!}</p>
        <span class="text-gray-400">”</span>
    </div>
</div>

