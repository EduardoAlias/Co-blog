@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-190 z-50 overflow-auto max-w-195 max-h-192" style="display: none">
        {{ $slot }}
    </div>
</div>