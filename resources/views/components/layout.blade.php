<!doctype html>

<title>Co-Blog</title>
<link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon">

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="icon" href="https://www.flaticon.es/icono-gratis/rastreo_2037358?term=favicon&page=1&position=2&origin=tag&related_id=2037358">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <x-navigation />
    <section class="lg:px-1 lg:py-3">
        <nav class="md:flex md:justify-between md:items-center">
           {{--  <div>
                <a href="/">
                    <img src="/images/coblog.png" alt="Co-blog Logo" width="165" height="16">
                </a>
            </div> --}}
            <!--Mensaje de bienvenida -->
             {{-- <div class="text-blue-500 text-3xl font-normal" x-data="{ isVisible: false }" 
                x-init="if (!localStorage.getItem('welcomeMessageShown')) { isVisible = true; setTimeout(() => { isVisible = false; localStorage.setItem('welcomeMessageShown', 'true'); }, 4000); }">
                <div x-show="isVisible" x-transition:enter="transition duration-500" 
                                        x-transition:leave="transition duration-900 opacity-0">
                    ¡Bienvenido {{ auth()->user()->name }}!
                </div>
            </div> --}}
           
        </nav>
       
        {{ $slot }}
        
        
        <footer id="newsletter"
                class="bg-gray-100 border border-black 
                       border-opacity-5 rounded-xl text-center py-16 px-10 mt-16"
        >
            <img src="/images/coblog-newsletter.png" alt="" class="mx-auto -mb-6" style="width: 105px;
            margin-bottom:10px;">

            <h5 class=" sm:text-4xl lg:text-3xl">No te pierdas ningún post</h5>
            <p class="sm:text-2xl lg:text-sm mt-3">Suscribete a nuestro newsletter</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div class="lg:mb-0 sm:mb-5">
                                <input id="email"
                                       name="email"
                                       type="text"
                                       placeholder="Tu email"
                                       class="lg:bg-transparent sm:py-6 sm:px-9 lg:py-0 pl-4 focus-within:outline-none">

                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 lg:mt-0 lg:ml-3 rounded-full sm:text-2xl lg:text-xs font-semibold    text-white uppercase py-3 px-8"
                        >
                            Suscribete
                        </button>
                    </form>
                </div>
            </div>
            @auth
            <p class="mt-4 text-blue-600 sm:text-base lg:text-sm">*El email debe ser el mismo que el que utilizaste para registrarte</p>
            @endauth
            @guest
            <p class="mt-4 text-blue-600 sm:text-base lg:text-sm">*Accede a tu perfil para poder suscribirte</p>
            @endguest
            <a href="#" id="scroll-to-top" class="fixed bottom-4 right-4 bg-blue-500 text-white p-2.5 rounded-full bg-opacity-80 hover:bg-opacity-100">
                <i class="fas fa-arrow-up"></i>
            </a>
        </footer>
        <footer class="bg-white rounded-lgm-1 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-blue-500 sm:text-center dark:text-gray-400">© 2023 
        <a href="#" class="hover:underline">Co-Blog</a>. Todos los derechos reservados.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">Sobre mí</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contacto</a>
        </li>
    </ul>
    </div>
</footer>

    </section>

    <x-flash/>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Comprobar si la página ha sido recargada al menos una vez (puedes usar localStorage o cookies)
        if (localStorage.getItem('paginaRecargada')) {
            // La página se ha recargado, así que desplázate a la sección deseada
            window.scrollTo({
                top: document.querySelector('#myPost').offsetTop,
                behavior: 'smooth' // Opcional, agrega una animación suave
            });
        } else {
            // La página no se ha recargado, marca la página como recargada
            localStorage.setItem('paginaRecargada', 'true');
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopButton = document.getElementById('scroll-to-top');

    scrollToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Para agregar un desplazamiento suave
        });
    });
});
    </script>
