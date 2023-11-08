
<x-dropdown>
    <x-slot name="trigger">
    
        <button class="text-left lg:px-3 lg:py-3 sm:px-8 sm:py-9 lg:text-sm sm:text-2xl font-semibold w-full lg:w-36 sm:w-full mx-auto relative">
    <span class="flex items-center">
        <span class="lg:text-sm pr-5 sm:max-w-xs mx-auto lg:text-sm sm:text-3xl">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categorias' }}
        </span>
        <x-icon name="down-arrow" class="ml-2" style="position: absolute; right: 4px;"/>
    </span>
</button>

  
    </x-slot>

    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->routeIs('home') && is_null(request()->getQueryString())"
    >
        Todo
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->fullUrlIs("*?category={$category->slug}*")'
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
