@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 border-gray-200 shadow-sm sm:rounded-lg']) }}>
    {{ $value ?? $slot }}
</label>
