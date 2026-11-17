@props(['disabled' => false])

<input
    x-data
    x-mask="A999AA 999"
    type=text
    @disabled($disabled) 
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}
>
