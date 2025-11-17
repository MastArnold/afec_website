<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>

    <x-slot name="header">
        <header class="w-full flex flex-col lg:flex-row justify-center gap-8 px-8 lg:px-32 pt-24 lg:pt-48 pb-24">
            <div class="w-2/3 lg:w-1/2 mx-auto lg:mx-0" data-aos="fade-right" data-aos-delay="400">
                @include("svg.domain.main-humaan")
            </div>
            <div class="w-full lg:w-1/2 lg:px-8 space-y-6" data-aos="fade-left" data-aos-delay="400">
                <h1 class="text-3xl lg:text-5xl text-gray-900 font-bold text-center lg:text-left">Là où nous intervenons</h1>

                <p class="text-gray-700 text-lg/7 text-sm/7">
                    Engagée aux côtés des communautés, l’AFEC œuvre pour renforcer 
                    l’éducation, développer les compétences professionnelles, 
                    promouvoir un développement durable et protéger les enfants. 
                    À travers ses actions humanitaires et son soutien aux populations vulnérables, 
                    l’ONG contribue à bâtir un Burkina Faso plus fort et plus solidaire
                </p>
            </div>
        </header>
    </x-slot>

    <section class="w-full bg-gray-100 flex flex-col lg:flex-row justify-center gap-8 px-8 lg:px-32 py-12 lg:py-24" data-aos="fade-up" data-aos-delay="400">
        <div class="w-2/3 lg:w-1/3 mx-auto lg:mx-0">
            @include("svg.domain.education-humaan")
        </div>
        <div class="w-full lg:w-1/2 lg:px-8 space-y-6">
            <h1 class="text-2xl lg:text-3xl text-gray-800 font-medium text-center lg:text-left">Education</h1>

            <p class="text-gray-600 text-lg/7 text-sm/7">
                L’AFEC offre une éducation de qualité aux enfants et aux jeunes, surtout à ceux issus de milieux 
                défavorisés, afin de leur donner les mêmes chances de réussite. 
                À travers un encadrement bienveillant, des outils pédagogiques adaptés et un soutien constant, 
                l’ONG crée les conditions pour que chacun puisse apprendre, s’épanouir et bâtir son avenir.
            </p>
        </div>
    </section>

    <section class="w-full bg-white flex flex-col lg:flex-row justify-center gap-8 px-8 lg:px-32 py-12 lg:py-24" data-aos="fade-down" data-aos-delay="400">
        <div class="w-2/3 lg:w-1/3 mx-auto lg:mx-0">
            @include("svg.domain.teaching-humaan")
        </div>
        <div class="w-full lg:w-1/2 lg:px-8 space-y-6">
            <h1 class="text-2xl lg:text-3xl text-gray-800 font-medium text-center lg:text-left">Enseignement supérieur</h1>

            <p class="text-gray-600 text-lg/7 text-sm/7">
                L’AFEC œuvre pour le développement de l’enseignement supérieur lasallien de qualité au Burkina Faso. 
                Elle œuvre à rendre l’enseignement supérieur scientifique et technologique de qualité accessible aux 
                filles et aux jeunes de familles modestes.
            </p>
        </div>
    </section>

    <section class="w-full bg-gray-100 flex flex-col lg:flex-row justify-center gap-8 px-8 lg:px-32 py-12 lg:py-24" data-aos="fade-up" data-aos-delay="400">
        <div class="w-2/3 lg:w-1/3 mx-auto lg:mx-0">
            @include("svg.domain.course-humaan")
        </div>
        <div class="w-full lg:w-1/2 lg:px-8 space-y-6">
            <h1 class="text-2xl lg:text-3xl text-gray-800 font-medium text-center lg:text-left">Fomation technique et professionnelle</h1>

            <p class="text-gray-600 text-lg/7 text-sm/7">
                L’AFEC œuvre pour la sécurité alimentaire à travers formation agronomique, 
                la mécanisation agricole, la production agro-pastorale et aquacole, 
                la transformation des produits agro-pastoraux et la protection de l’environnement.
            </p>
        </div>
    </section>

    <section class="w-full bg-white flex flex-col lg:flex-row justify-center gap-8 px-8 lg:px-32 py-12 lg:py-24" data-aos="fade-down" data-aos-delay="400">
        <div class="w-2/3 lg:w-1/3 mx-auto lg:mx-0">
            @include("svg.domain.development-humaan")
        </div>
        <div class="w-full lg:w-1/2 lg:px-8 space-y-6">
            <h1 class="text-2xl lg:text-3xl text-gray-800 font-medium text-center lg:text-left">Développement durable</h1>

            <p class="text-gray-600 text-lg/7 text-sm/7">
                L’AFEC œuvre pour la sécurité alimentaire à travers formation agronomique, 
                la mécanisation agricole, la production agro-pastorale et aquacole, 
                la transformation des produits agro-pastoraux et la protection de l’environnement.
            </p>
        </div>
    </section>

    <section class="w-full bg-gray-100 flex flex-col lg:flex-row justify-center gap-8 px-8 lg:px-32 py-12 lg:py-24" data-aos="fade-up" data-aos-delay="400">
        <div class="w-2/3 lg:w-1/3 mx-auto lg:mx-0">
            @include("svg.domain.child-protection-humaan")
        </div>
        <div class="w-full lg:w-1/2 lg:px-8 space-y-6">
            <h1 class="text-2xl lg:text-3xl text-gray-800 font-medium text-center lg:text-left">Protection de l'enfant et action humanitaire</h1>

            <p class="text-gray-600 text-lg/7 text-sm/7">
                L’AFEC assure à chaque structure d’éducation et de formation lasallienne 
                un cadre favorisant la croissance intégrale et harmonieuse de l’enfant. 
                L’AFEC est aussi solidaire avec les personnes déplacées internes et les
                 ménages hôtes pour leur redonner sourire et espoir, et contribuer à un Burkina Faso résilient.
            </p>
        </div>
    </section>

    <a href="{{ route('web.donation') }}" class="fixed left-8 bottom-16 
                flex items-center justify-center 
                bg-gradient-to-r from-[#3658FA] to-[#FFD29D] rounded-full p-4">
        <svg class="w-6" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_47_368)">
                <path d="M0.430176 49.5764V27.5425H5.51492C6.44715 27.5425 7.20986 28.3052 7.20986 29.2374V30.9324V42.7968V47.8815C7.20986 48.8138 6.44715 49.5765 5.51492 49.5765L0.430176 49.5764Z" fill="#6CACFF"/>
                <path d="M33.142 3.22044C34.6674 1.52549 36.9555 0.423828 39.4132 0.423828C44.0742 0.423828 47.8877 4.23739 47.8877 8.89837C47.8877 13.9831 42.803 22.4576 33.4809 27.5424C24.159 22.4576 19.0742 13.9831 19.0742 8.89837C19.0742 4.23739 22.8878 0.423828 27.5488 0.423828C28.7352 0.423828 29.9216 0.678065 30.9386 1.10183C30.9386 1.10183 32.464 1.94925 33.0572 3.05101L33.142 3.22044Z" fill="white"/>
                <path d="M35.2609 39.7459C35.5151 39.6611 35.7693 39.5763 36.0236 39.4069L45.7693 34.6611C46.9558 33.9831 48.5659 34.4069 49.2439 35.5934C49.9219 36.7798 49.4981 38.39 48.3117 39.068L36.871 46.1866C36.871 46.1866 34.3286 47.8815 28.3965 47.8815C23.3117 47.8815 15.6846 43.6442 15.6846 43.6442C15.6846 43.6442 13.9897 42.7968 10.5999 42.7968H7.20996V30.9324H17.3794C19.9218 30.9324 24.1591 36.0171 26.7015 36.0171H31.7862C33.4812 36.0171 34.3286 36.8645 34.3286 36.8645C34.3286 36.8645 35.176 37.712 35.176 39.4069L35.2609 39.7459Z" fill="white"/>
                <path d="M5.51485 50H0.430109C0.175872 50 0.00634766 49.8305 0.00634766 49.5762C0.00634766 49.322 0.175872 49.1525 0.430109 49.1525H5.51485C6.19285 49.1525 6.78604 48.5593 6.78604 47.8813V29.2373C6.78604 28.5593 6.19285 27.9661 5.51485 27.9661H0.430109C0.175872 27.9661 0.00634766 27.7966 0.00634766 27.5423C0.00634766 27.2881 0.175872 27.1186 0.430109 27.1186H5.51485C6.70132 27.1186 7.63346 28.0508 7.63346 29.2372V47.8812C7.63346 49.0678 6.70123 50 5.51485 50ZM28.3962 48.305C23.2267 48.305 15.769 44.1525 15.5148 43.983C15.5148 43.983 13.8199 43.2203 10.5996 43.2203C10.3454 43.2203 10.1758 43.0508 10.1758 42.7966C10.1758 42.5423 10.3454 42.3728 10.5996 42.3728C14.0742 42.3728 15.769 43.2202 15.8539 43.305C15.9386 43.3897 23.481 47.4575 28.3962 47.4575C34.0741 47.4575 36.6165 45.8474 36.6165 45.8474L48.0572 38.7288C49.0741 38.1356 49.4131 36.8644 48.8199 35.8474C48.2267 34.8305 46.9555 34.4915 45.9386 35.0847L36.1928 39.8305C34.4132 40.7627 32.7182 40.7628 29.2437 40.7628C25.8539 40.7628 20.9386 39.9153 20.6844 39.9153C20.4301 39.9153 20.2606 39.6611 20.3454 39.4069C20.3454 39.1526 20.5997 38.9831 20.8539 39.0679C20.9386 39.0679 25.9386 39.9153 29.2437 39.9153C32.5488 39.9153 34.2437 39.9153 35.8539 39.1526L45.5996 34.4068C46.9555 33.6441 48.82 34.0679 49.5827 35.5085C50.4301 36.9492 49.9216 38.7289 48.481 39.5763L37.0404 46.6949C36.9554 46.6101 34.4131 48.305 28.3962 48.305ZM2.54872 45.7627C2.04024 45.7627 1.70129 45.4237 1.70129 44.9153C1.70129 44.4068 2.04024 44.0678 2.54872 44.0678C3.05719 44.0678 3.39614 44.4068 3.39614 44.9153C3.39614 45.4237 3.05719 45.7627 2.54872 45.7627ZM34.3284 37.2881C34.2436 37.2881 34.0741 37.2881 33.9894 37.2034C33.9894 37.2034 33.2267 36.4407 31.786 36.4407H26.7012C25.2605 36.4407 23.5657 35.1695 21.786 33.8136C20.1759 32.6272 18.4809 31.356 17.3793 31.356H10.5996C10.3454 31.356 10.1758 31.1865 10.1758 30.9322C10.1758 30.678 10.3454 30.5085 10.5996 30.5085H17.3793C18.82 30.5085 20.5148 31.7796 22.2945 33.1355C23.9046 34.322 25.5996 35.5932 26.7012 35.5932H31.786C33.6504 35.5932 34.5826 36.5254 34.6673 36.5254C34.8368 36.695 34.8368 36.9492 34.6673 37.1186C34.5826 37.2881 34.4131 37.2881 34.3284 37.2881ZM33.4809 27.9661C33.3962 27.9661 33.3114 27.9661 33.3114 27.8814C24.1589 22.8813 18.6504 14.322 18.6504 8.8983C18.6504 3.98308 22.6335 0 27.5487 0C28.8199 0 30.0063 0.254237 31.108 0.762711C31.3622 0.847424 31.4469 1.10166 31.3622 1.3559C31.2775 1.61014 31.0233 1.69485 30.769 1.61014C29.7521 1.18637 28.6504 0.932137 27.5487 0.932137C23.1419 0.932137 19.4978 4.57617 19.4978 8.98301C19.4978 14.1525 24.7521 22.2881 33.4808 27.1186C42.2096 22.2881 47.4639 14.0678 47.4639 8.98301C47.4639 4.57627 43.8198 0.932137 39.413 0.932137C36.2774 0.932137 33.396 2.79651 32.1248 5.59312C32.0401 5.84735 31.7859 5.93207 31.5317 5.76264C31.2774 5.67793 31.1927 5.42369 31.3621 5.16946C32.8029 2.0339 36.0233 0 39.4131 0C44.3283 0 48.3114 3.98308 48.3114 8.8983C48.3114 14.322 42.8029 22.8813 33.6504 27.8814C33.6504 27.9661 33.5656 27.9661 33.4809 27.9661ZM44.2436 7.62711C44.0741 7.62711 43.9047 7.5424 43.8198 7.37288C43.3114 6.01698 42.2944 5.00003 41.0232 4.57627C40.769 4.49156 40.6843 4.23732 40.769 4.06779C40.8537 3.81356 41.1079 3.72884 41.2775 3.81356C42.8876 4.40674 44.0741 5.59322 44.6673 7.20335C44.752 7.45759 44.6673 7.62711 44.413 7.71183C44.3283 7.62711 44.2436 7.62711 44.2436 7.62711Z" fill="#3658FA"/>
            </g>
            <defs>
                <clipPath id="clip0_47_368">
                    <rect width="50" height="50" fill="white"/>
                </clipPath>
            </defs>
        </svg>
    </a>
</x-web-layout>