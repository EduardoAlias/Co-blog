@props(['post'])

<article class="transition-colors duration-300 hover:bg-white bg-gray-100 border border-black border-opacity-0 hover:border-opacity-20 rounded-xl lg:w-5/6 sm:8/8 mx-auto my-4">
    <div class="py-6 px-6 lg:flex">
        <div class="flex-1 lg:mr-8 mt-10">
            <img src="{{ asset($post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl mt-4 h-70 mx-auto sm:mx-auto" width="640">
        </div>

        <div class="flex-1 flex flex-col justify-between space-y-5">
            <header class="mt-8 lg:mt-0 lg:mr-20">
                <div class="flex items-center sm:justify-center lg:justify-start">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="lg:text-3xl sm:text-4xl sm:text-center lg:text-left lg:font-normal sm:font-semibold">
                        <a href="/posts/{{ $post->slug }}">
                             {{ $post->title }}
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

            <footer class="flex justify-between items-center mt-12">
                <div class="flex items-center text-sm">
                   @if($post->author->username  === 'Eduardo')
                    <img src="/images/profile/fotoperfil.jpg" alt="Eduardo" width="70"height="60" class="mt-10">
                      
                    @elseif($post->author->username === 'Anastasiia')
                    <img src="/images/profile/anastasiia.jpg" alt="anastasiia" width="90"height="90" class="mt-10">   
                       
                    @elseif($post->author->username === 'Antonio')
                    <img src="/images/profile/antonio.jpg" alt="antonio" width="80"height="80" class="mt-10"> 
                        
                    @elseif($post->author->username === 'Laura')
                    <img src="/images/profile/Laura.jpg" alt="Laura" width="70" max-height="60" class="mt-10">  
                      
                    @endif
                    <div class="mt-7 ml-6">
                        <h5 class="font-bold lg:text-sm sm:text-2xl lg:text-left sm:text-center">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div class=" mt-7 mr-6">
                    <a href="/posts/{{ $post->slug }}"
                       class="transition-colors duration-300 lg:text-xs sm:text-xl font-semibold bg-gray-200 hover:bg-gray-300 rounded-full
                              lg:py-2 lg:px-4  sm:py-5 sm:px-7
                              lg:left-5 lg:inline-block lg:text-center ml-9"
                    >Leer más</a>
                </div>
            </footer>
        </div>
    </div>
</article>
<br>
