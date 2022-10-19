@props([
    'class' => ''
])

<div class="bg-white shadow-sm sm:rounded-lg p-10 border-b border-gray-200 flex {{ $class }}">
    {{ $slot }}
</div>