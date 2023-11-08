@props(['post'])

<article {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-white bg-gray-100 border border-black border-opacity-0 hover:border-opacity-20 rounded-xl sm:w-8/8 lg:w-5/6 mx-auto my-4']) }}>
    <div class="py-6 px-5 h-full flex flex-col">
        <div class="w-full flex justify-center">
            <img src="{{ asset($post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl lg:w-5/6 max-w-xl max-h-4/5 lg:max-h-lg">
        </div>

        <div class="mt-3 flex flex-col justify-between flex-1 lg:p-7">
            <header>
                <div class="flex items-center sm:justify-center lg:justify-start">
                   <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="lg:text-3xl sm:text-4xl sm:text-center lg:text-left lg:font-normal sm:font-semibold sm:mr-7 sm:ml-7 lg:mr-0 lg:ml-0">
                        <a href="/posts/{{ $post->slug }}">
                            {{ implode(' ', array_slice(explode(' ', $post->title), 0, 10)) }}{{ str_word_count($post->title) > 10 ? '...' : '' }}
                        </a>
                    </h1>

                    <span class="mt-4 lg:ml-2 block text-gray-400 lg:text-xs sm:text-xl lg:text-left sm:text-center">
                        Publicado <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class=" mt-7 mb-10 lg:text-lg lg:text-left sm:text-3xl sm:text-center mt-2 space-y-4 sm:mr-12 sm:ml-12 lg:mr-0 lg:ml-0">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center">
                <div class="flex items-center text-sm">
                   @if($post->author->username  === 'Eduardo')
                    <img src="/images/profile/fotoperfil.jpg" alt="Eduardo" width="70"height="60" class="mt-10">
                      
                    @elseif($post->author->username === 'Anastasiia')
                    <img src="/images/profile/anastasiia.jpg" alt="anastasiia" width="70"height="70" class="mt-10">   
                       
                    @elseif($post->author->username === 'Antonio')
                    <img src="/images/profile/antonio.jpg" alt="antonio" width="80"height="80" class="mt-10"> 
                        
                    @elseif($post->author->username === 'Laura')
                    <img src="/images/profile/Laura.jpg" alt="Laura" width="70" max-height="60" class="mt-10">  
                      
                    @endif
                    <div class="mt-8 lg:ml-2 sm:ml-3">
                        <h5 class="font-bold lg:text-sm sm:text-2xl lg:text-left sm:text-center">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="/posts/{{ $post->slug }}"
                       class="transition-colors duration-300 lg:text-xs sm:text-xl font-semibold bg-gray-200 hover:bg-gray-300 rounded-full
                              lg:py-2 lg:px-2  sm:py-5 sm:px-7
                              lg:ml-5 lg:inline-block lg:text-center"
                    >Leer más</a>
                </div>
            </footer>
        </div>
    </div>
</article>
