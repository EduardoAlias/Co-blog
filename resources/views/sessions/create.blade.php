<x-layout>
    <section class="px-6 py-8">
        <main class="lg:max-w-lg lg:mx-auto mt-10 bg-gray-50">
            <x-panel>
                <h1 class="text-center font-bold sm:text-3xl lg:text-xl">Log In!</h1>

                <form method="POST" action="/login" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username" required />
                    <x-form.input name="password" type="password" autocomplete="current-password" required />

                    <x-form.button>Log In</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
