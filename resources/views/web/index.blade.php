<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>

    <x-slot name="header">
        <header class="w-full flex flex-col lg:flex-row justify-between items-center gap-2 bg-white px-8 lg:px-24 py-16 lg:py-32">
            <div class="w-full lg:w-2/3">
                <div class="space-y-3">
                    <h1 class="text-gray-900 text-lg lg:text-2xl font-bold text-center lg:text-left">Association des Frères <br> des Écoles Chrétiennes</h1>
                    <p class="text-gray-500 text-xl lg:text-5xl font-bold text-center lg:text-left">Nous intervenons <br> lorsque nous sommes appélés <br> dans la lumière de Dieu</p>
                    <button class="hidden lg:inline-block px-4 py-2 bg-blue-800 text-white text-sm rounded-md">En savoir plus</button>
                </div>
            </div>
            <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                <div class="w-full aspect-9/16 lg:aspect-square rounded-xl overflow-hidden">
                    <img class="w-full h-full object-cover object-top" src="{{ asset('storage/header-1.jpeg') }}" alt="Image de couverture">
                </div>
            </div>
        </header>
    </x-slot>

    <!-- A Propos -->
    <section class="px-8 lg:px-32 py-6 lg:py-12" id="about">
        <h4 class="text-xl lg:text-4xl text-gray-800 font-bold">Qui sommes nous ?</h4>

        <div class="flex flex-col-reverse lg:flex-row justify-between gap-8 my-8">
            <div class="w-full lg:w-1/3 flex flex-col items-center justify-center gap-4">
                <img class="w-full h-full object-cover" src="{{ asset('storage/theme/2025.png') }}" alt="theme">
                <span class="text-sm text-gray-900">Thème de l'année 2025</span>
            </div>
            <div class="w-full lg:w-1/2 space-y-4">
                <div class="space-y-2">
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ex eligendi eos corporis magni et est accusantium impedit inventore? Ullam illo dolorem cupiditate ea nesciunt reprehenderit quisquam nemo, architecto quia?</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum maiores ut eligendi molestias adipisci fugit dicta sapiente harum, facere, aperiam nam quod ab alias saepe nostrum corrupti corporis dignissimos accusantium.</p>
                </div>
                <button class="px-4 py-2 bg-blue-800 text-white text-sm rounded-md mx-auto lg:mx-0">En savoir plus</button>
            </div>
        </div>
    </section>

    <!-- Donation -->
    <section class="relative h-[100vh] lg:h-[60vh] bg-fixed bg-center bg-cover flex items-center"
            style="background-image: url('{{ asset('storage/home-donation.png') }}');">
        
        <div class="absolute inset-0 bg-white/50"></div>
        
        <div class="relative z-10 text-center px-6 mx-auto">
            <p class="text-4xl font-bold mb-16 lg:mb-8 text-gray-700">Agir aujourd'hui <br> pour changer demain</p>
            
            <a href="#" class="relative group inline-flex gap-4 items-center px-8 py-4 bg-gradient-to-r from-[#3658FA] to-[#FFBA6A] text-white text-xl rounded-md font-bold font-itim w-auto mx-auto">
                <svg class="w-8 group-hover:scale-110 duration-150 transition[transform]" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_79_148)">
                    <path d="M0.343994 39.6609V22.0338H4.41179C5.15758 22.0338 5.76775 22.644 5.76775 23.3898V24.7457V34.2373V38.3051C5.76775 39.0509 5.15758 39.661 4.41179 39.661L0.343994 39.6609Z" fill="#FFD29D"/>
                    <path d="M26.5134 2.57628C27.7337 1.22032 29.5642 0.338989 31.5303 0.338989C35.2591 0.338989 38.31 3.38983 38.31 7.11862C38.31 11.1864 34.2422 17.966 26.7845 22.0338C19.3269 17.966 15.2592 11.1864 15.2592 7.11862C15.2592 3.38983 18.31 0.338989 22.0388 0.338989C22.988 0.338989 23.9371 0.542379 24.7506 0.881388C24.7506 0.881388 25.971 1.55933 26.4455 2.44074L26.5134 2.57628Z" fill="white"/>
                    <path d="M28.2084 31.7965C28.4118 31.7287 28.6152 31.6609 28.8186 31.5254L36.6152 27.7287C37.5643 27.1863 38.8524 27.5253 39.3948 28.4745C39.9372 29.4237 39.5982 30.7118 38.6491 31.2542L29.4965 36.9491C29.4965 36.9491 27.4626 38.3051 22.7169 38.3051C18.6491 38.3051 12.5474 34.9152 12.5474 34.9152C12.5474 34.9152 11.1915 34.2373 8.47962 34.2373H5.7677V24.7457H13.9033C15.9372 24.7457 19.327 28.8135 21.3609 28.8135H25.4287C26.7847 28.8135 27.4626 29.4915 27.4626 29.4915C27.4626 29.4915 28.1406 30.1694 28.1406 31.5254L28.2084 31.7965Z" fill="white"/>
                    <path d="M4.41181 40H0.344014C0.140624 40 0.00500488 39.8644 0.00500488 39.661C0.00500488 39.4576 0.140624 39.322 0.344014 39.322H4.41181C4.95421 39.322 5.42876 38.8474 5.42876 38.305V23.3898C5.42876 22.8474 4.95421 22.3729 4.41181 22.3729H0.344014C0.140624 22.3729 0.00500488 22.2372 0.00500488 22.0339C0.00500488 21.8305 0.140624 21.6948 0.344014 21.6948H4.41181C5.36099 21.6948 6.1067 22.4406 6.1067 23.3897V38.305C6.1067 39.2542 5.36091 40 4.41181 40ZM22.7169 38.644C18.5813 38.644 12.6152 35.322 12.4118 35.1864C12.4118 35.1864 11.0558 34.5762 8.4796 34.5762C8.27621 34.5762 8.14059 34.4406 8.14059 34.2372C8.14059 34.0338 8.27621 33.8982 8.4796 33.8982C11.2593 33.8982 12.6152 34.5762 12.683 34.644C12.7508 34.7118 18.7847 37.966 22.7169 37.966C27.2592 37.966 29.2931 36.6779 29.2931 36.6779L38.4457 30.983C39.2592 30.5085 39.5304 29.4915 39.0558 28.6779C38.5813 27.8644 37.5643 27.5932 36.7508 28.0678L28.9542 31.8644C27.5305 32.6102 26.1745 32.6102 23.3949 32.6102C20.6831 32.6102 16.7508 31.9323 16.5474 31.9323C16.344 31.9323 16.2084 31.7289 16.2763 31.5255C16.2763 31.3221 16.4796 31.1865 16.683 31.2543C16.7508 31.2543 20.7508 31.9323 23.3949 31.9323C26.039 31.9323 27.3949 31.9323 28.683 31.3221L36.4796 27.5255C37.5643 26.9153 39.0559 27.2543 39.6661 28.4068C40.344 29.5594 39.9372 30.9831 38.7847 31.661L29.6322 37.3559C29.5643 37.2881 27.5304 38.644 22.7169 38.644ZM2.0389 36.6101C1.63212 36.6101 1.36096 36.339 1.36096 35.9322C1.36096 35.5254 1.63212 35.2543 2.0389 35.2543C2.44568 35.2543 2.71684 35.5254 2.71684 35.9322C2.71684 36.339 2.44568 36.6101 2.0389 36.6101ZM27.4626 29.8305C27.3948 29.8305 27.2592 29.8305 27.1915 29.7627C27.1915 29.7627 26.5813 29.1526 25.4287 29.1526H21.3609C20.2084 29.1526 18.8525 28.1356 17.4287 27.0509C16.1406 26.1017 14.7847 25.0848 13.9034 25.0848H8.4796C8.27621 25.0848 8.14059 24.9492 8.14059 24.7458C8.14059 24.5424 8.27621 24.4068 8.4796 24.4068H13.9034C15.0559 24.4068 16.4118 25.4237 17.8355 26.5084C19.1236 27.4576 20.4796 28.4746 21.3609 28.4746H25.4287C26.9202 28.4746 27.666 29.2203 27.7338 29.2203C27.8694 29.356 27.8694 29.5594 27.7338 29.6949C27.666 29.8305 27.5304 29.8305 27.4626 29.8305ZM26.7847 22.3729C26.7169 22.3729 26.6491 22.3729 26.6491 22.3051C19.327 18.3051 14.9202 11.4576 14.9202 7.11864C14.9202 3.18646 18.1067 0 22.0389 0C23.0558 0 24.005 0.20339 24.8863 0.610169C25.0897 0.677939 25.1575 0.881329 25.0897 1.08472C25.0219 1.28811 24.8186 1.35588 24.6152 1.28811C23.8016 0.949099 22.9203 0.745709 22.0389 0.745709C18.5135 0.745709 15.5982 3.66093 15.5982 7.18641C15.5982 11.322 19.8016 17.8304 26.7846 21.6948C33.7676 17.8304 37.971 11.2542 37.971 7.18641C37.971 3.66101 35.0558 0.745709 31.5303 0.745709C29.0219 0.745709 26.7167 2.23721 25.6998 4.47449C25.632 4.67788 25.4286 4.74565 25.2253 4.61011C25.0219 4.54234 24.9541 4.33895 25.0896 4.13556C26.2423 1.62712 28.8186 0 31.5304 0C35.4626 0 38.6491 3.18646 38.6491 7.11864C38.6491 11.4576 34.2422 18.3051 26.9202 22.3051C26.9202 22.3729 26.8524 22.3729 26.7847 22.3729ZM35.3948 6.10169C35.2592 6.10169 35.1237 6.03392 35.0558 5.8983C34.649 4.81358 33.8355 4.00002 32.8185 3.66101C32.6151 3.59324 32.5474 3.38985 32.6151 3.25423C32.6829 3.05085 32.8863 2.98308 33.0219 3.05085C34.31 3.52539 35.2592 4.47457 35.7337 5.76268C35.8015 5.96607 35.7337 6.10169 35.5304 6.16946C35.4626 6.10169 35.3948 6.10169 35.3948 6.10169Z" fill="#51565F"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_79_148">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>

                <span>Faire un don</span>
            </a>
        </div>
    </section>

    <!-- Actualités -->
    <section class="relative w-full px-8 lg:px-32 py-6 lg:h-screen lg:py-12 lg:mb-12">
        <h4 class="text-3xl text-gray-800 font-bold font-sans mb-4">Dernières actualités</h4>

        <div class="space-y-4 lg:space-y-0 lg:flex lg:gap-4 h-[calc(100%-3rem)]"> 
            <!-- Actualité courante -->
            <div class="relative w-full h-[60vh] lg:w-3/5 lg:h-full overflow-hidden rounded-md">
                <div class="flex flex-col justify-end gap-2 px-8 py-8 h-full">
                    <div class="flex gap-2 items-center">
                        <span class="text-sm text-gray-50">Auteur</span>
                        <span class="text-sm text-gray-200 font-bold">Date</span>
                    </div>
                    <h5 class="text-xl text-gray-50 font-bold">Titre</h5>
                    <p class="text-sm text-gray-100">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat 
                        nostrum voluptate nam consequatur, ad eligendi omnis, nulla porro, corrupti at adipisci libero quia 
                        rem. Quibusdam facere dignissimos sunt quasi harum.
                    </p>
                </div>

                <img class="absolute top-0 left-0 w-full h-full object-cover -z-20"
                    src="https://images.unsplash.com/photo-1495020689067-958852a7765e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1169"
                    alt="couverture actualité">
                <div class="absolute inset-4 bg-black opacity-40 -z-10 rounded-md"></div>
            </div>

            <!-- Liste d'actualités -->
            <div class="w-full lg:w-2/5 box-border">
                <div class="flex flex-row lg:flex-col gap-4 w-full h-[40vh] lg:h-full py-2 lg:py-0 overflow-x-auto lg:overflow-y-auto">
                    @foreach ([0,1,2,3,4,5,6] as $i)
                        <div class="relative w-2/3 lg:w-full flex-shrink-0 overflow-hidden px-4 py-6 rounded-md cursor-pointer">
                            <div class="space-y-1">
                                <div class="flex gap-2 items-center">
                                    <span class="text-xs text-gray-50">Auteur</span>
                                    <span class="text-xs text-gray-200 font-bold">Date</span>
                                </div>
                                <h5 class="text-sm text-gray-50 font-bold">Autre actualités {{ $i }}</h5>
                            </div>

                            <img class="absolute top-0 left-0 w-full h-full object-cover -z-20"
                                src="https://images.unsplash.com/photo-1762449871044-f74f67f57999?auto=format&fit=crop&q=60&w=600"
                                alt="couverture actualité">

                            <div class="absolute inset-0 bg-black opacity-40 -z-10"></div>
                        </div>
                    @endforeach
                </div>

                <a href="#" class="relative block group text-gray-600 text-md pb-4 my-2 mx-auto cursor-pointer">
                    <div class="grid place-items-center w-12 h-12 bg-white mx-auto rounded-full">
                        <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 11L12 15M12 15L16 11M12 15V3M7 4.51555C4.58803 6.13007 3 8.87958 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 8.87958 19.412 6.13007 17 4.51555" class="stroke-gray-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>

                    <span class="absolute -z-10 left-0 right-0 bottom-0 text-center text-gray-600
                                lg:-translate-y-full lg:opacity-0 group-hover:translate-y-0 group-hover:opacity-100 
                                transition-[transform] duration-300 ease-in-out">Autre actualités</span>
                </a>
            </div>
        </div>
    </section>

</x-web-layout>