<x-layout>
    @include ('posts._header')

    <main class="">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">Todavía no hay ningún post disponible</p>
        @endif
    </main>
</x-layout>