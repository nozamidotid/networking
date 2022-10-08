@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-300 rounded-xl focus:ring focus:ring-blue-300 focus:border-blue-600 transition duration-200']) !!}>
