@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea
        class="w-full h-64 border p-2" style="resize: vertical;"
        name="{{ $name }}"
        id="{{ $name }}"
        required
        {{ $attributes }}
    >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
