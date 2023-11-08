@auth
    <section class="col-span-8 sm:col-span-12 col-start-5 mt-10 space-y-6 sm:space-y-12 text-center">
        <x-panel class="p-6 sm:p-12">
            <form method="POST" action="/posts/{{ $post->slug }}/comments">
                @csrf

                <header class="flex items-center">
                    <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                         alt=""
                         width="60"
                         height="60"
                         class="rounded-full">
                    <h2 class="ml-4 lg:text-base sm:text-3xl">¿Quieres participar?</h2>
                </header>

                <div class="mt-6">
                    <textarea
                        name="body"
                        class="w-full lg:text-base sm:text-2xl focus:outline-none focus:ring"
                        rows="5"
                        placeholder="¡Comparte tu opinión!"
                        required></textarea>

                    @error('body')
                        <span class="text-xs sm:text-xl text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-center sm:justify-end mt-6 pt-6 border-t border-gray-200">
                    <x-form.button class="text-2xl sm:text-4xl">Enviar</x-form.button>
                </div>
            </form>
        </x-panel>
    </section>
@endauth

@if (!auth()->check())
    <p class="font-semibold text-blue-500 text-2xl sm:text-4xl">
        <a href="/register" class="hover:underline text-black">Regístrate</a> o
        <a href="/login" class="hover:underline text-black">inicia sesión</a> para dejar un comentario.
    </p>
@endif
