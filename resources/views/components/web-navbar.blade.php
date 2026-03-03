<!--nav x-data="{ opennav: false }" id="navbar" class="fixed left-0 right-0 bg-white z-50">
    <div class="px-8 py-2 flex gap-2 justify-between items-center">
        <div class="brand">
            <a href="#" class="inline-block p-2 bg-white text-sm text-gray-800">
                <img id="brand" class="w-20 mx-auto transition duration-300 ease-in-out" src="{{ asset('storage/logo.png') }}" alt="Logo">
            </a>
        </div>

        <div class="hidden lg:block flex space-x-6 justify-end items-center">
            @include('components.partials.web-navbar-item', [
                'href' => route('web.home'),
                'text' => 'Accueil',
                'active' => request()->routeIs('web.home')
            ])

            <div class="group relative inline-block bg-white">
                 @include('components.partials.web-navbar-item', [
                    'href' => route('web.about'),
                    'text' => 'A Propos',
                    'active' => request()->routeIs('web.about')
                ])

                <ul class="py-2 w-48 absolute bottom-0 -z-10 opacity-0 translate-y-0 flex flex-col gap-1
                            origin-top group-hover:opacity-100 group-hover:translate-y-full transition-all duration-[.4s] ease-in-out">
                    <a href="{{ route('web.about') }}#header" class="bg-white px-2 py-3 rounded-2xl border border-blue-800 text-sm font-medium text-gray-600 hover:bg-gray-50 cursor-pointer">Qui nous sommes</a>
                    <a href="{{ route('web.about') }}#mission" class="bg-white px-2 py-3 rounded-2xl border border-blue-800 text-sm font-medium text-gray-600 hover:bg-gray-50 cursor-pointer">Notre mission</a>
                    <a href="{{ route('web.about') }}#partners" class="bg-white px-2 py-3 rounded-2xl border border-blue-800 text-sm font-medium text-gray-600 hover:bg-gray-50 cursor-pointer">Nos Partenaires</a>
                    <a href="{{ route('web.about') }}#team" class="bg-white px-2 py-3 rounded-2xl border border-blue-800 text-sm font-medium text-gray-600 hover:bg-gray-50 cursor-pointer">Notre Equipe</a>
                </ul>
            </div>

            @include('components.partials.web-navbar-item', [
                'href' => route('web.blog'),
                'text' => 'Actualités',
                'active' => request()->routeIs('web.blog')
            ])

            @include('components.partials.web-navbar-item', [
                'href' => route('web.domain'),
                'text' => 'Interventions',
                'active' => request()->routeIs('web.domain')
            ])

            @include('components.partials.web-navbar-item', [
                'href' => route('web.images'),
                'text' => 'Galerie Image',
                'active' => request()->routeIs('web.images')
            ])

            @include('components.partials.web-navbar-item', [
                'href' => route('web.donation'),
                'text' => 'Agir avec nous',
                'active' => request()->routeIs('web.donation')
            ])

            @include('components.partials.web-navbar-item', [
                'href' => route('web.contact'),
                'text' => 'Nous contacter',
                'active' => request()->routeIs('web.contact')
            ])
        </div>

        <div class="-me-2 flex items-center md:hidden">
            <button @click="opennav = ! opennav" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out z-50">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': opennav, 'inline-flex': ! opennav }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! opennav, 'inline-flex': opennav }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div :class="{'block': opennav, 'hidden': ! opennav}" class="fixed z-40 top-0 bottom-0 right-0 left-0 bg-[rgba(0,0,0,0.5)] hidden md:hidden">
        <div class="absolute right-0 bg-white px-4 py-8 w-[60%] h-full animate-fadeLeft">
            <div class="pt-[50px] mr-auto flex flex-col items-center gap-4">
                <div class="mb-8">
                    <a href="#" class="inline-block p-2 bg-white text-sm text-gray-800">Logo</a>
                </div>

                @include('components.partials.web-navbar-item', [
                    'href' => route('web.home'),
                    'text' => 'Accueil',
                    'active' => request()->routeIs('web.home')
                ])

                @include('components.partials.web-navbar-item', [
                    'href' => route('web.about'),
                    'text' => 'A Propos',
                    'active' => request()->routeIs('web.about')
                ])

                @include('components.partials.web-navbar-item', [
                    'href' => route('web.blog'),
                    'text' => 'Actualités',
                    'active' => request()->routeIs('web.blog')
                ])

                @include('components.partials.web-navbar-item', [
                    'href' => route('web.domain'),
                    'text' => 'Interventions',
                    'active' => request()->routeIs('web.domain')
                ])

                @include('components.partials.web-navbar-item', [
                    'href' => route('web.images'),
                    'text' => 'Galerie Image',
                    'active' => request()->routeIs('web.images')
                ])

                @include('components.partials.web-navbar-item', [
                    'href' => route('web.donation'),
                    'text' => 'Agir avec nous',
                    'active' => request()->routeIs('web.donation')
                ])

                @include('components.partials.web-navbar-item', [
                    'href' => route('web.contact'),
                    'text' => 'Nous contacter',
                    'active' => request()->routeIs('web.contact')
                ])
            </div>
        </div>
    </div>
</!--nav-->

