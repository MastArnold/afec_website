<!-- Side bar -->
<div class="w-1/6 flex flex-col gap-16 bg-white py-4 px-2">
    <!-- Brand side -->
    <div class="space-y-1">
        <img class="w-28 mx-auto" src="{{ asset('storage/logo.png') }}" alt="Logo">
        <h1 class="text-gray-800 font-medium text-md text-center">AFEC</h1>
        <h2 class="text-gray-500 font-medium text-sm text-center">Administration Web</h2>
    </div>
    <!-- Navigation -->
    <div class="space-y-4">
        <!-- General -->
        @include("components.admin-sidebar-link", 
            [
                'text' => 'Tableau de bord',
                'icon' => 'dashboard',
                'active' => true
            ]
        )
        <!-- Home -->
        @include("components.admin-sidebar-link", 
            [
                'text' => 'Accueil',
                'icon' => 'home',
                'active' => false
            ]
        )
        <!-- About -->
        <div x-data="{ open: false }" 
            class="group w-full px-2 py-1 rounded-md hover:bg-gray-100/60 cursor-pointer overflow-y-hidden transition ease-in-out duration-300"
            :class="{ 'bg-gray-100/60': open }">
            <button @click="open = !open" class="w-full flex flex-row gap-3 items-center">
                <svg class="w-6 fill-gray-600 group-hover:fill-blue-800" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g> <path d="M66,84H54V42a5.9966,5.9966,0,0,0-6-6H36a6,6,0,0,0,0,12h6V84H30a6,6,0,0,0,0,12H66a6,6,0,0,0,0-12Z"></path> <path d="M48,24A12,12,0,1,0,36,12,12.0119,12.0119,0,0,0,48,24Z"></path> </g> </g></svg>
                <span class="text-gray-700 group-hover:text-blue-800 font-medium text-xs">A Propos</span>
            </button>
            <div x-show="open" class="pl-10 py-3 space-y-6">
                <button class="peer flex flex-row gap-3 items-center">
                    <span class="text-gray-700 peer-hover:text-blue-800 font-medium text-xs">Texte et image</span>
                </button>
                <button class="peer flex flex-row gap-3 items-center">
                    <span class="text-gray-700 peer-hover:text-blue-800 font-medium text-xs">Partenaire</span>
                </button>
                <button class="peer flex flex-row gap-3 items-center">
                    <span class="text-gray-700 peer-hover:text-blue-800 font-medium text-xs">Equipe</span>
                </button>
            </div>
        </div>
        <!-- Blog -->
        @include("components.admin-sidebar-link", 
            [
                'text' => 'Actualités',
                'icon' => 'blog',
                'active' => false
            ]
        )
        <!-- Domain -->
        @include("components.admin-sidebar-link", 
            [
                'text' => 'Domaine d\'intervention',
                'icon' => 'domain',
                'active' => false
            ]
        )
        <!-- Image -->
        @include("components.admin-sidebar-link", 
            [
                'text' => 'Gallerie d\'image',
                'icon' => 'image',
                'active' => false
            ]
        )
        <!-- Video -->
        @include("components.admin-sidebar-link", 
            [
                'text' => 'Gallerie de video',
                'icon' => 'video',
                'active' => false
            ]
        )
        <!-- Contact -->
        @include("components.admin-sidebar-link", 
            [
                'text' => 'Contact',
                'icon' => 'contact',
                'active' => false
            ]
        )
    </div>
</div>