@props([
    'type',
    'name',
    'class' => '',
    'placeholder',
    'edit' => ''
])

@if (!($name === 'phone'))
    <div>
        <input type='{{ $type }}' name='{{ $name }}' id='{{ $name }}' class='py-4 px-5 rounded-xl border border-gray-500 max-h-14 {{ $class }}' placeholder='{{ $placeholder }}' value='{{ old($name, $edit) }}' />
        <x-dashboard.msg-error :input='$name' />
    </div>    
@else
    <div>
        <div class="flex">
            <div class="bg-gray-500 py-4 px-5 rounded-l-xl text-white max-h-14">+33</div>
            <input type="text" name="phone" id="phone" class="py-4 px-5 rounded-r-xl border border-gray-500 max-h-14 {{ $class }}" placeholder='Téléphone :' value='{{ old($name, $edit) }}' >
        </div>
        <x-dashboard.msg-error input='phone' />
    </div>
@endif

