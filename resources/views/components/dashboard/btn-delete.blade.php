@props([
    'route',
    'item'
])

<form action="{{ route($route, $item) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="hover:text-rose-600"><i class="fa-solid fa-ban"></i></button>
</form>