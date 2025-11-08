<nav class="fixed left-0 right-0 bg-white">
    <div class="px-8 py-2 flex gap-2 justify-between items-center">
        <div class="brand">
            <a href="#" class="inline-block p-2 bg-white text-sm text-gray-800">Logo</a>
        </div>

        <div class="hidden lg:block flex space-x-6 justify-end items-center">
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
                'href' => route('web.domain'),
                'text' => 'Galerie Image',
                'active' => request()->routeIs('web.domain')
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
</nav>