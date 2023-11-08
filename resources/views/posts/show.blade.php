<x-layout>
    <a href="/"
                       class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500 underline">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Volver a los posts
                    </a>
                    <div class="space-x-2 text-right -mt-4">
                        <x-category-button :category="$post->category" class="text-lg"/>
                    </div>
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <h1 class="font-bold sm:text-5xl text-center lg:text-4xl ml-4 mb-10">
            {{ $post->title }}
        </h1>
        
        <article class="max-w-6xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="{{ asset($post->thumbnail) }}" alt="" width="450" class="rounded-xl mx-auto my-auto">

                <p class="text-center block text-gray-400 sm:text-lg lg:text-sm mt-5">
                    Publicado
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

             
                
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    

                    
                </div>

                

               <div class="space-y-4 lg:text-lg sm:text-3xl lg:ml-0 lg:mr-0 sm:ml-9 sm:mr-9 leading-loose text-center sm:text-center"> <!-- Aplicamos clases de alineación -->
                    {!! $post->body !!}
                </div>
                
                <div class="flex items-center text-sm mt-5 sm:justify-center"> <!-- Aplicamos clases de alineación -->
                    <div class="lg:ml-3 text-center lg:text-left">
                        <h5 class="font-bold"> <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a> </h5>
                        @if($post->author->username  === 'Eduardo')
                        <img src="/images/profile/fotoperfil.jpg" alt="Eduardo" width="70" height="60" class="">
                        @elseif($post->author->username === 'Anastasiia')
                        <img src="/images/profile/anastasiia.jpg" alt="anastasiia" width="80" height="80" class="">
                        @elseif($post->author->username === 'Antonio')
                        <img src="/images/profile/antonio.jpg" alt="Antonio" width="80" height="80" class="flex items-center">
                        @elseif($post->author->username === 'Laura')
                        <img src="/images/profile/Laura.jpg" alt="Laura" width="50" height="30" class="">
                        @endif
                    </div>
                </div>
                <section class="col-span-8 sm:col-span-6 col-start-5 mt-10 space-y-6">
                    @include ('posts._add-comment-form')
                
                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment"/>
                    @endforeach
                </section>
        </article>
    </main>
</x-layout>