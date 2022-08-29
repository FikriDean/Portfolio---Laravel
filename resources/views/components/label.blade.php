@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-dark bg-transparent']) }}>
    {{ $value ?? $slot }}
</label>
