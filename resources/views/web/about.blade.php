<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>

    <x-slot name="header">
        <header class="relative w-full flex flex-col lg:flex-row justify-between gap-4 bg-white px-8 lg:px-24 pt-32 pb-8 lg:pt-32 lg:pb-32">
            <div class="w-full lg:w-3/5" data-aos="fade-up" data-aos-delay="200">
                <div class="space-y-8 lg:space-y-16">
                    <h1 class="text-gray-900 text-3xl lg:text-6xl font-bold font-sans text-center lg:text-left">Qui nous sommes, <br> notre mission, <br> nos valeurs...</h1>
                    @foreach ($about["introduction"] as $intro)
                        <p class="text-gray-600 leading-relaxed text-xl lg:text-lg text-left lg:pr-32">
                            {{ $intro }}
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="w-full lg:w-2/5 mt-8 lg:mt-0" data-aos="fade-up">
                <div class="w-full flex flex-row gap-8">
                    <div class="w-1/2 flex flex-col gap-8">
                        <div class="w-full aspect-[9/12] bg-cover rounded-lg" style="background-image: url('{{ asset($about['cover1']) }}');"></div>
                        <div class="w-full aspect-[9/12] bg-cover rounded-lg" style="background-image: url('{{ asset($about['cover2']) }}');"></div>
                    </div>
                    <div class="w-1/2 flex flex-col gap-8 mt-28">
                        <div class="w-full aspect-[9/12] bg-cover bg-center rounded-lg" style="background-image: url('{{ asset($about['cover3']) }}');"></div>
                        <div class="w-full aspect-[9/12] bg-cover rounded-lg" style="background-image: url('{{ asset($about['cover4']) }}');"></div>
                    </div>
                </div>
            </div>
        </header>
    </x-slot>
    
    <!-- Mission -->
    <section class="w-full px-8 lg:px-32 py-8 lg:py-16" data-aos="fade-up" data-aos-delay="300">
        <h1 class="text-4xl lg:text-3xl text-center lg:text-left text-gray-600 font-bold">Notre mission</h1>

        <div class="w-full flex flex-col-reverse lg:flex-row justify-between py-8 lg:py-12">
            <div class="w-full lg:w-3/5 space-y-1 text-lg text-gray-600">
                @foreach ($about["mission"] as $mission)
                    <p class="text-lg/7">{{ $mission }}</p>
                @endforeach
            </div>
            <div class="w-full lg:w-2/5 flex flex-col items-center lg:items-start gap-4 lg:gap-12 pb-8 lg:pb-0 lg:pl-32">
                @foreach($about["goals"] as $goal)
                    <div class="flex flex-col gap-1 lg:gap-2">
                        <span class="text-3xl lg:text-4xl text-gray-900 font-sans font-bold">{{ $goal->value }}</span>
                        <span class="text-sm lg:text-md text-gray-600 font-sans">{{ $goal->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Transition -->
    <section class="w-full h-[30vh] lg:h-[50vh] bg-cover bg-center bg-fixed" style="background-image: url('{{ asset($about['transition']) }}');">
    </section>

    <!-- Valeurs -->
    <section class="px-8 lg:px-32 py-8 lg:py-16 space-y-8">
        <div data-aos="fade-up">
            <h4 class="text-3xl lg:text-3xl text-gray-800 font-bold font-sans">Nos valeurs</h4>
            <p class="text-xl text-gray-600">{{ $about['value_sub_title'] }}</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            @foreach ($about['values'] as $value)
                <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-4">
                        @include('svg.about.' . $value->icon)

                    <p class="text-lg text-blue-800 font-bold">{{ $value->name }}</p>
                </div>
                
                <p class="text-gray-600 text-md">{{ $value->quote }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Partenaires -->
    <section class="relative w-full lg:min-h-[70vh] px-8 lg:px-32 bg-cover bg-center" data-aos="fade-down" data-aos-delay="300"
            style="background-image: url('https://images.unsplash.com/photo-1558522195-e1201b090344?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFydG5lcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=600'); background-size: cover; background-position: center;">
        <div class="py-12 space-y-8 lg:space-y-16">        
            <h4 class="relative z-10 text-2xl lg:text-3xl text-gray-800 font-bold text-center">{{ $about['partner_text'] }}</h4>
            
            <div class="relative z-10 flex flex-wrap gap-8 lg:gap-32 items-center justify-center">
                @foreach ($about['partners'] as $partner)
                    <a href="{{ $partner->url }}" class="w-12 lg:w-16 aspect-square">
                        <img class="w-full h-full object-contain" src="{{ asset($partner->logo) }}" alt="Logo {{ $partner->name }}">
                    </a>
                @endforeach
            </div>
        </div>

        <div class="absolute inset-0 bg-white/80"></div>
    </section>

    <!-- Equipe -->
    <section class="px-8 lg:px-32 py-8 lg:py-16 space-y-4 lg:space-y-8" data-aos="fade-up" data-aos-delay="300">
        <div class="space-y-1 mb-12 lg:mb-0">
            <h4 class="text-4xl lg:text-3xl text-gray-800 font-sans font-bold">Notre équpe</h4>
            <p class="text-xl text-gray-600">{{ $about['team_text'] }}</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            @foreach ($about['teams'] as $team)
                <div class="space-y-4 lg:space-y-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="w-16 h-16 rounded-full overflow-hidden mx-auto">
                        <img class="w-full object-cover scale-110" src="{{ asset($team->photo) }}" alt="photo equipe">
                    </div>

                    <div class="space-y-2 text-center">
                        <p class="text-sm font-bold text-gray-800">{{ $team->name }}</p>
                        <p class="text-sm text-gray-600">{{ $team->role }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Rapport et publication -->
    <section class="w-full px-8 lg:px-32 py-8 lg:py-16 space-y-4 lg:space-y-8" data-aos="fade-up" data-aos-delay="300">
        <div class="space-y-1">
            <h4 class="text-4xl lg:text-3xl text-gray-800 font-sans font-bold">Nos rapports et publications</h4>
            <p class="text-xl text-gray-600">{{ $about['blog_text'] }}</p>
        </div>

        <div class="w-full overflow-x-auto">
            <div class="flex space-x-4 py-4">
                @foreach ($about['blogs'] as $blog)
                    <a href="#" class="inline-block relative w-3/5 lg:w-2/5 aspect-[9/12] lg:aspect-[9/10] rounded-md bg-cover bg-center px-4 lg:px-8 py-12 flex-shrink-0 rounded-md overflow-hidden" style="background-image: url('{{ asset($blog->cover) }}');">
                        <div class="absolute z-20 bottom-8 lg:bottom-4 flex flex-col gap-2">
                            <p class="font-bold text-gray-50">{{ $blog->date }}</p>
                            <p class="w-full lg:w-1/2 font-bold text-xl lg:text-2xl text-gray-300">{{ $blog->title }}</p>
                        </div>

                        <div class="absolute inset-0 bg-black/30 z-10"></div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

</x-web-layout>