<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>
    
    <section class="w-full px-8 lg:px-32 pt-24 pb-8">
        <div class="space-y-1 mb-8 lg:mb-0">
            @include("components.search-bar")
            
            <div class="w-1/2 flex justify-center items-center gap-3 mx-auto py-3">
                <a href="#" class="inline-block flex items-center px-3 py-1 text-white 
                                    bg-[#1F3082] text-xs rounded-2xl font-bold flex-shrink-0">
                    A la une
                </a>
                <a href="#" class="inline-block flex items-center px-3 py-1 text-[#1F3082] 
                                    border-2 border-[#1F3082] text-xs rounded-2xl flex-shrink-0">
                    Rapport
                </a>
                <a href="#" class="inline-block flex items-center px-3 py-1 text-[#1F3082] 
                                    border-2 border-[#1F3082] text-xs rounded-2xl flex-shrink-0">
                    Annonce
                </a>
            </div>
        </div>

        <!-- A la une -->
        <div class="space-y-8 lg:space-y-12 mb-8 lg:mb-4">
            <h1 class="text-3xl text-gray-900 font-bold">A la une</h1>

            <div class="flex flex-col lg:flex-row gap-4 lg:gap-8">
                <div class="w-full lg:w-1/2 aspect-square overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover object-center" src="https://images.unsplash.com/photo-1736618625357-2a7f197f8c23?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw1fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=600" alt="Image (titre)">
                </div>
                <div class="w-full lg:w-1/2 flex flex-col gap-4 lg:gap-8">
                    <div class="space-y-2 lg:space-y-1">
                        <div class="flex items-center gap-4">
                            <span class="text-md lg:text-sm text-gray-800 italic font-bold">Auteur</span>
                            <span class="text-sm lgtext-xs text-gray-500">Date</span>
                        </div>
                        <h5 class="text-4xl text-gray-900 font-medium">Titre</h5>
                    </div>
                    <div class="space-y-4 lg:space-y-3">
                        <p class="text-lg/7 lg:text-sm/7 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dicta sequi iusto voluptatibus 
                            earum esse aliquam laudantium. Explicabo iure, odio repudiandae ullam minima fugit delectus 
                            veritatis ex voluptatem cum aliquid!e <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptatum reiciendis quasi 
                            cum minus, vel quo facere unde aliquam, laborum dolorem eum eligendi deserunt numquam eius 
                            magnam distinctio ratione totam? <br>
                        </p>
                        <a href="{{ route('web.blog.view', 1) }}" class="inline-block text-lg text-[#1F3082] font-bold">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Autre news -->
        <div class="w-full overflow-x-auto">
            <div class="flex space-x-4 py-4">
                @foreach ([1,1,11,11,1,1,1,11,1] as $item)
                    <a href="#" class="inline-block relative w-3/5 lg:w-[28%] aspect-[9/12] lg:aspect-[3/2] rounded-md bg-cover bg-center px-4 lg:px-8 py-12 flex-shrink-0 rounded-md overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1761960084284-c3fa68e5c2cd?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDQ0fHRvd0paRnNrcEdnfHxlbnwwfHx8fHw%3D&auto=format&fit=crop&q=60&w=600');">
                        <div class="absolute z-20 bottom-8 lg:bottom-4 flex flex-col gap-2">
                            <p class="font-bold text-gray-50">08-11-2025</p>
                            <p class="w-full font-bold text-xl text-gray-300">Un livre peut en cacher un autre</p>
                        </div>

                        <div class="absolute inset-0 bg-black/30 z-10"></div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

</x-web-layout>