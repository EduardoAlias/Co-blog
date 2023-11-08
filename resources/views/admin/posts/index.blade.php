<x-layout>
    <x-setting heading="Editar o Borrar Posts"> 
        <div class="flex flex-col">
            <div class="">
                <div class="py-2 align-middle inline-block min-w-full sm:px-1 lg:px-1">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="font-semibold bg-blue-500 ml-7 px-5 py-3 bg-gray-200 text-left lg:text-sm sm:text-xl font-medium text-white uppercase tracking-wider">Título</th>
                                    <th class="bg-blue-500 px-6 py-3 bg-gray-200 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                    <th class="bg-blue-500 px-6 py-3 bg-gray-200 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="px-6 py-9 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="lg:text-base sm:text-xl font-medium text-gray-900">
                                                    <a href="/posts/{{ $post->slug }}">
                                                        {{ implode(' ', array_slice(explode(' ', $post->title), 0, 6)) }}{{ str_word_count($post->title) > 6 ? '...' : '' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                        
                                        <td class="mr-10 px-1 py-2 sm:px-6 sm:py-4 sm:text-2xl lg:text-sm whitespace-nowrap">
                                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Editar</a>
                                        </td>
                        
                                        <td class="px-1 py-2 sm:px-6 sm:py-4 text-xs lg:text-sm whitespace-nowrap">
                                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')
                        
                                                <button class="sm:text-2xl lg:text-sm text-red-400">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>
