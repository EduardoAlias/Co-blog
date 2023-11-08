<section class="lg:py-8 lg:max-w-4xl lg:mx-auto lg:pr-20">
    <h1 class=" ml-11 mt-2 mb-2 sm:text-3xl lg:text-xl font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class=""> 
            <aside class="ml-11">
    <h4 class="inline mt-9 mr-7 lg:text-lg sm:text-3xl font-semibold mb-4">Links &rarr;</h4>


    <ul class="lg:text-base mt-8 sm:text-3xl inline">
        <li class="lg:inline-block sm:inline-block lg:mr-4 sm:mr-4 sm:mb-2">
            <a href="/admin/posts" class="p-1 {{ request()->is('admin/posts') ? 'lg:p-2 sm:p-2 border border-blue-500 text-blue-500' : '' }}">Editar Posts</a>
        </li>

        <li class="lg:inline-block sm:inline-block lg:mt-2 sm:mt-9">
            <a href="/admin/posts/create" class="p-1 {{ request()->is('admin/posts/create') ? 'lg:p-2 sm:p-2 border border-blue-500 text-blue-500' : '' }}">Crear Posts</a>
        </li>
    </ul>
</aside>


        

        <main class="flex-1 mt-3"> <!-- Toma todo el espacio restante -->
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
