<nav class="bg-white shadow">
   <div  class="container mx-auto px-8 py-2 lg:right-0 z-50p-4">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="lg:flex lg:justify-between lg:items-center">
                <div class="sm:flex sm:items-center sm:justify-center sm:justify-start">
                    <a href="/">
                        <img src="/images/coblog.png" alt="Co-blog Logo" class="sm:w-60 lg:w-40" height="16">
                    </a>
                </div>
               
            </div>
            <hr class="lg:hidden bg-blue-500"/>
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
           <div class="lg:mb-0 lg:mt-0 sm:mt-5 sm:mb-8 lg:flex lg:items-center lg:justify-between sm:flex sm:items-center sm:justify-center">

                @auth
                <x-dropdown>
                 
                    <x-slot name="trigger">
                        <button type="button" 
                                class="lg:text-base sm:text-4xl p-3 flex items-center gap-x-1 text-sm font-semibold 
                                       leading-6 text-gray-900 border border-white border-blue-500 text-blue-500 hover:border-blue-900 hover:text-blue-900 rounded-lg 
                                       " aria-expanded="false">
                            TU ESPACIO
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                          </button>
                       
                        
                    </x-slot>
                    
                    @admin
                    <x-dropdown-item href="/"
                                     :active="request()->is('/')">
                       Inicio
                     </x-dropdown-item>
                        <x-dropdown-item
                            href="/admin/posts"
                            :active="request()->is('admin/posts')"
                        >
                            Editar Posts
                        </x-dropdown-item>

                        <x-dropdown-item
                            href="/admin/posts/create"
                            :active="request()->is('admin/posts/create')"
                        >
                            Crear Posts
                        </x-dropdown-item>
                    @endadmin
                   

                    <x-dropdown-item
                        href="#"
                        x-data="{}"
                        @click.prevent="document.querySelector('#logout-form').submit()"
                    >
                        Log Out
                    </x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>
            @else
            <a href="/"
            class="p-2 lg:text-base sm:text-4xl rounded-md p-3 mr-8 text-base border border-white hover:border-blue-500 hover:text-blue-500 font-bold uppercase 
            {{ request()->is('/') ? 'text-blue-500 border border-blue-500' : '' }}">
             Inicio
            </a>
                <a href="/register"
                   class="lg:text-base sm:text-4xl rounded-md p-3 ml-8 text-base border border-white hover:border-blue-500 hover:text-blue-500 font-bold uppercase 
                   {{ request()->is('register') ? 'text-blue-500 border-blue-500' : '' }}">
                    Registro
                </a>

                <a href="/login"
                   class="lg:text-base sm:text-4xl rounded-md p-3 ml-8 text-base border border-white hover:border-blue-500 hover:text-blue-500 font-bold uppercase 
                   {{ request()->is('login') ? 'text-blue-500 border-blue-500' : '' }}">
                    Log In
                </a>
            @endauth

                   <a href="#newsletter"
           class="hidden sm:hidden lg:block bg-blue-500 hover:bg-white hover:text-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase 
                  py-3 px-5 border border-white hover:border-blue-500">
                        ¡Suscribete!
                    </a>
            </div>
        </div>
    </div>
</nav>
<!-- MOBILE VERSION -->


</div>