
<header class="max-w-xxl mx-auto text-center -mt-2">
    <div> 
        <x-mainHeading />
        <p id="myPost"></p>
    </div> 
    <h1  class="lg:text-4xl sm:text-6xl mt-20 mb-10">Últimas Noticias de <span class="text-blue-500 ">Co</span>-Blog </h1>
        <p class="mt-5 mb-5 text-blue-500 font-semibold lg:text-lg sm:text-4xl">Registrate en la web nuestra para escribir 
           <span class="underline underline-offset-3">
            tus propios artículos y comentarios
            </span>
        </p>
        
    <div class="sm:max-w-1/2 mr-10 space-y-2 lg:space-y-0 lg:space-x-20 mt-12">
        <div class="sm:max-w-1/2 lg:relative inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>
       
        <!-- Search -->
        <div class="relative flex inline-flex ml-10 items-center bg-gray-100 rounded-xl lg:px-3 lg:py-3
        sm:px-8 sm:py-9 lg:text-sm sm:text-2xl">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <!--Ocultar buscar on focus-->
                <style>
                    input:focus::placeholder {
                      color: transparent;
                    }
                  </style>
                  
                  <input type="text" name="search" placeholder="Buscar..." 
                         class="bg-transparent placeholder-black font-semibold lg:text-sm sm:text-2xl">
                  
                  
            </form>
        </div>
    </div><br>
    <hr/>
</header>
</div>