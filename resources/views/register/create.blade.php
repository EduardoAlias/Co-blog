<x-layout>
    <section class="px-6 py-8">
        <main class="lg:max-w-lg lg:mx-auto mt-10 bg-gray-50">
            <x-panel>
                <h1 class="text-center font-bold sm:text-3xl lg:text-xl">Registrate</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="name" required />
                    <x-form.input name="username" required />
                    <x-form.input name="email" type="email" required />
                    <x-form.input name="password" type="password" autocomplete="new-password" required />
                    
                    
                    <x-form.button>Registro</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>