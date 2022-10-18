@props([
    'type',
    'name',
    'class' => '',
    'placeholder'
])


<div class="">
    <input type='{{ $type }}' name='{{ $name }}' id='{{ $name }}' class='py-4 px-5 rounded-xl border border-gray-500 max-h-14 {{ $class }}' placeholder='{{ $placeholder }}' value='{{ old($name) }}' />
    <x-dashboard.msg-error :input='$name' />
</div>