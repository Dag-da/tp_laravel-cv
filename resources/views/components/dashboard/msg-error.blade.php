@props([
    'input'
])

@error($input)
<p class="text-rose-500">*{{ $message }}</p>
@enderror