@props(['name'])

<label class="block mb-2 uppercase font-bold sm:text-2xl lg:text-xs text-gray-700"
       for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>
