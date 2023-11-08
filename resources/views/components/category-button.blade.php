@props(['category'])

<a href="/?category={{ $category->slug }}"
   class="lg:mt-0 mt-5 lg:text-xs sm:text-base lg:px-3 lg:py-1 sm:px-5 sm:py-3 border border-blue-500 rounded-full text-blue-500 uppercase font-semibold text-center"
   
>{{ $category->name }}</a>
