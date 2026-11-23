@props(['type'])

@php
$classes = match ($type) {
1 => 'text-blue-600 font-semibold',
2 => 'text-green-600 font-semibold',
3 => 'text-red-600 font-semibold',
}
@endphp

<div>
    <p>
        Cтатус заказа:
        <span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
    </p>
</div>