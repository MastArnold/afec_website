<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>

    <section class="w-full flex flex-col lg:flex-row gap-4">
        <div class="w-full lg:w-2/5 relative px-12 py-24 lg:py-32 bg-cover" style="background-image: url('{{ asset('storage/contact-bg.jpeg') }}');">
            <div class="relative z-20 space-y-12">
                <div class="space-y-2">
                    <h1 class="text-gray-50 text-center lg:text-left text-4xl font-bold">Contactez nous</h1>
                    <p class="text-gray-100 text-center lg:text-left text-md w-full lg:w-2/3">Suivez nos canaux officiel ou contactez nous avec le formulaire à votre droite.</p>
                </div>

                @foreach ($contact["sieges"] as $siege)
                    <div>
                        <h5 class="text-{{ $siege["color"] }}-300 text-center lg:text-left text-lg font-bold mb-2">{{ $siege["name"] }}</h5>
                        <div class="flex flex-col justify-center lg:justify-start gap-4">
                            <div class="flex items-center justify-center lg:justify-start gap-8">
                                <svg class="w-6" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.66667 30L15 20M33.3333 30L25 20M5 13.3333L17.0417 21.361C18.1108 22.0738 18.6453 22.4303 19.2232 22.5686C19.7338 22.6911 20.2662 22.6911 20.7768 22.5686C21.3547 22.4303 21.8892 22.0738 22.9583 21.361L35 13.3333M10.3333 31.6666H29.6667C31.5335 31.6666 32.467 31.6666 33.18 31.3033C33.8072 30.9838 34.3172 30.4738 34.6367 29.8466C35 29.1336 35 28.2001 35 26.3333V13.6666C35 11.7998 35 10.8664 34.6367 10.1533C34.3172 9.52613 33.8072 9.0162 33.18 8.69663C32.467 8.33331 31.5335 8.33331 29.6667 8.33331H10.3333C8.4665 8.33331 7.53307 8.33331 6.82003 8.69663C6.19282 9.0162 5.68288 9.52613 5.36332 10.1533C5 10.8664 5 11.7998 5 13.6666V26.3333C5 28.2001 5 29.1336 5.36332 29.8466C5.68288 30.4738 6.19282 30.9838 6.82003 31.3033C7.53307 31.6666 8.46648 31.6666 10.3333 31.6666Z" class="stroke-{{ $siege["color"] }}-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <a href="mailto:{{ $siege["email"] }}" target="_blank" class="text-gray-200 hover:text-gray-50 text-md font-medium">{{ $siege["email"] }}</a>
                            </div>
                            <div class="flex items-center justify-center lg:justify-start gap-8">
                                <svg class="w-6" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 9.16667C5 23.434 16.566 35 30.8333 35C31.477 35 32.1152 34.9765 32.7472 34.9302C33.4723 34.877 33.8348 34.8505 34.165 34.6605C34.4383 34.5032 34.6975 34.2242 34.8345 33.94C35 33.597 35 33.1968 35 32.3967V27.7012C35 27.0282 35 26.6917 34.8892 26.4033C34.7915 26.1485 34.6325 25.9217 34.4265 25.7427C34.1933 25.54 33.877 25.425 33.2447 25.195L27.9 23.2515C27.1642 22.984 26.7962 22.8502 26.4472 22.8728C26.1393 22.8928 25.8432 22.998 25.5915 23.1763C25.3062 23.3785 25.1048 23.7142 24.702 24.3857L23.3333 26.6667C18.9168 24.6665 15.3365 21.0815 13.3333 16.6667L15.6144 15.298C16.2858 14.8952 16.6214 14.6938 16.8237 14.4084C17.002 14.1568 17.1072 13.8606 17.1272 13.5528C17.1498 13.2038 17.016 12.8359 16.7485 12.1001L14.805 6.75535C14.575 6.12293 14.46 5.80672 14.2574 5.5735C14.0784 5.36748 13.8515 5.20858 13.5967 5.11075C13.3083 5 12.9718 5 12.2989 5H7.60335C6.80313 5 6.40302 5 6.05997 5.16542C5.77583 5.30243 5.4969 5.56168 5.3395 5.83505C5.14947 6.16512 5.12292 6.5277 5.06982 7.25288C5.02355 7.88477 5 8.52297 5 9.16667Z" class="stroke-{{ $siege["color"] }}-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <a href="tel:{{ $siege["phone"] }}" target="_blank" class="text-gray-200 hover:text-gray-50 text-md font-medium">{{ $siege["phone"] }}</a>
                            </div>
                            <div class="flex items-center justify-center lg:justify-start gap-8">
                                <svg class="w-6 opacity-0" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 34.1732H4.79167V2.1094C4.79167 1.82945 5.02279 1.59833 5.30273 1.59833H21.5332C21.8132 1.59833 22.0443 1.82945 22.0443 2.1094V14.1309H36.4062C36.6862 14.1309 36.9173 14.362 36.9173 14.6419V34.1699H40V38.3985H0V34.1732ZM8.89323 6.42255H12.2135C12.3145 6.42255 12.3991 6.50718 12.3991 6.60809V10.6315C12.3991 10.7324 12.3145 10.8171 12.2135 10.8171H8.89323C8.79232 10.8171 8.70768 10.7324 8.70768 10.6315V6.60809C8.70768 6.50718 8.79232 6.42255 8.89323 6.42255ZM14.5182 26.4356H17.8385C17.9395 26.4356 18.0241 26.5202 18.0241 26.6211V30.6446C18.0241 30.7455 17.9395 30.8301 17.8385 30.8301H14.5182C14.4173 30.8301 14.3327 30.7455 14.3327 30.6446V26.6211C14.3327 26.5169 14.4173 26.4356 14.5182 26.4356ZM8.89323 26.4356H12.2135C12.3145 26.4356 12.3991 26.5202 12.3991 26.6211V30.6446C12.3991 30.7455 12.3145 30.8301 12.2135 30.8301H8.89323C8.79232 30.8301 8.70768 30.7455 8.70768 30.6446V26.6211C8.70768 26.5169 8.79232 26.4356 8.89323 26.4356ZM14.5182 19.7624H17.8385C17.9395 19.7624 18.0241 19.847 18.0241 19.9479V23.9714C18.0241 24.0723 17.9395 24.1569 17.8385 24.1569H14.5182C14.4173 24.1569 14.3327 24.0723 14.3327 23.9714V19.9512C14.3327 19.847 14.4173 19.7624 14.5182 19.7624ZM8.89323 19.7624H12.2135C12.3145 19.7624 12.3991 19.847 12.3991 19.9479V23.9714C12.3991 24.0723 12.3145 24.1569 12.2135 24.1569H8.89323C8.79232 24.1569 8.70768 24.0723 8.70768 23.9714V19.9512C8.70768 19.847 8.79232 19.7624 8.89323 19.7624ZM14.5182 13.0925H17.8385C17.9395 13.0925 18.0241 13.1771 18.0241 13.278V17.3015C18.0241 17.4024 17.9395 17.487 17.8385 17.487H14.5182C14.4173 17.487 14.3327 17.4024 14.3327 17.3015V13.278C14.3327 13.1771 14.4173 13.0925 14.5182 13.0925ZM8.89323 13.0925H12.2135C12.3145 13.0925 12.3991 13.1771 12.3991 13.278V17.3015C12.3991 17.4024 12.3145 17.487 12.2135 17.487H8.89323C8.79232 17.487 8.70768 17.4024 8.70768 17.3015V13.278C8.70768 13.1771 8.79232 13.0925 8.89323 13.0925ZM14.5182 6.42255H17.8385C17.9395 6.42255 18.0241 6.50718 18.0241 6.60809V10.6315C18.0241 10.7324 17.9395 10.8171 17.8385 10.8171H14.5182C14.4173 10.8171 14.3327 10.7324 14.3327 10.6315V6.60809C14.3327 6.50718 14.4173 6.42255 14.5182 6.42255ZM7.54232 3.98114H19.235C19.4368 3.98114 19.6029 4.17971 19.6029 4.42059V32.3731C19.6029 32.614 19.4368 32.8125 19.235 32.8125H7.54232C7.3405 32.8125 7.17448 32.614 7.17448 32.3731V4.42059C7.17448 4.17971 7.3405 3.98114 7.54232 3.98114ZM23.6361 18.9909H26.9564C27.0573 18.9909 27.1419 19.0755 27.1419 19.1765V23.1999C27.1419 23.3008 27.0573 23.3854 26.9564 23.3854H23.6361C23.5352 23.3854 23.4505 23.3008 23.4505 23.1999V19.1765C23.4505 19.0755 23.5352 18.9909 23.6361 18.9909ZM29.2611 26.4356H32.5814C32.6823 26.4356 32.7669 26.5202 32.7669 26.6211V30.6446C32.7669 30.7455 32.6823 30.8301 32.5814 30.8301H29.2611C29.1602 30.8301 29.0755 30.7455 29.0755 30.6446V26.6211C29.0755 26.5169 29.1602 26.4356 29.2611 26.4356ZM23.6361 26.4356H26.9564C27.0573 26.4356 27.1419 26.5202 27.1419 26.6211V30.6446C27.1419 30.7455 27.0573 30.8301 26.9564 30.8301H23.6361C23.5352 30.8301 23.4505 30.7455 23.4505 30.6446V26.6211C23.4505 26.5169 23.5352 26.4356 23.6361 26.4356ZM29.2611 18.9909H32.5814C32.6823 18.9909 32.7669 19.0755 32.7669 19.1765V23.1999C32.7669 23.3008 32.6823 23.3854 32.5814 23.3854H29.2611C29.1602 23.3854 29.0755 23.3008 29.0755 23.1999V19.1765C29.0755 19.0755 29.1602 18.9909 29.2611 18.9909ZM22.4154 16.5137H34.1081C34.3099 16.5137 34.4759 16.7123 34.4759 16.9531V32.3731C34.4759 32.614 34.3099 32.8125 34.1081 32.8125H22.4154C22.2135 32.8125 22.0475 32.614 22.0475 32.3731V16.9531C22.0475 16.7123 22.2135 16.5137 22.4154 16.5137Z" class="fill-{{ $siege["color"] }}-600"/>
                                </svg>

                                <a href="{{ $siege["map"] }}" target="_blank" class="inline-block text-gray-50 text-center lg:text-left text-md font-medium">{{ $siege["address"] }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="flex justify-center lg:justify-start items-center gap-8 lg:gap-6">
                    @foreach ($contact["socials"] as $social)
                        <a href="#" class="flex inline-block bg-white rounded-full overflow-hidden flex-shrink-0">
                            @if($social["name"] == "facebook")
                                <svg class="w-8 lg:w-6" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Facebook-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -160.000000)" fill="#4460A0"> <path d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z" id="Facebook"> </path> </g> </g> </g></svg>
                            @endif

                            @if($social["name"] == "linkedin")
                                <svg class="w-8 lg:w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#0077B5" fill-rule="evenodd" d="M20.45175,20.45025 L16.89225,20.45025 L16.89225,14.88075 C16.89225,13.5525 16.86975,11.844 15.04275,11.844 C13.191,11.844 12.90825,13.2915 12.90825,14.7855 L12.90825,20.45025 L9.3525,20.45025 L9.3525,8.997 L12.765,8.997 L12.765,10.563 L12.81375,10.563 C13.2885,9.66225 14.4495,8.71275 16.18125,8.71275 C19.78575,8.71275 20.45175,11.08425 20.45175,14.169 L20.45175,20.45025 Z M5.33925,7.4325 C4.1955,7.4325 3.27375,6.50775 3.27375,5.36775 C3.27375,4.2285 4.1955,3.30375 5.33925,3.30375 C6.47775,3.30375 7.4025,4.2285 7.4025,5.36775 C7.4025,6.50775 6.47775,7.4325 5.33925,7.4325 L5.33925,7.4325 Z M7.11975,20.45025 L3.5565,20.45025 L3.5565,8.997 L7.11975,8.997 L7.11975,20.45025 Z M23.00025,0 L1.0005,0 C0.44775,0 0,0.44775 0,0.99975 L0,22.9995 C0,23.55225 0.44775,24 1.0005,24 L23.00025,24 C23.55225,24 24,23.55225 24,22.9995 L24,0.99975 C24,0.44775 23.55225,0 23.00025,0 L23.00025,0 Z"></path> </g></svg>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="absolute inset-0 bg-black/60 z-10"></div>
        </div>
        <form class="w-full lg:w-3/5 px-8 lg:px-16 py-16 lg:py-32">
            <div class="space-y-6 lg:space-y-4">
                <div class="w-full flex flex-col lg:flex-row gap-6 lg:gap-4">
                    <div class="w-full lg:w-1/2 space-y-1">
                        <label for="" class="block text-sm text-gray-800 font-medium">Nom</label>
                        <input type="text" name="" id="" class="border-gray-400 text-md rounded-md w-full">
                    </div>
                    <div class="w-full lg:w-1/2 space-y-1">
                        <label for="" class="block text-sm text-gray-800 font-medium">Prénom</label>
                        <input type="text" name="" id="" class="border-gray-400 text-md rounded-md w-full">
                    </div>
                </div>
                <div class="w-full space-y-1">
                    <label for="" class="block text-sm text-gray-800 font-medium">Email</label>
                    <input type="text" name="" id="" class="border-gray-400 text-md rounded-md w-full">
                </div>
                <div class="w-full space-y-1">
                    <label for="" class="block text-sm text-gray-800 font-medium">Téléphone</label>
                    <input type="text" name="" id="" class="border-gray-400 text-md rounded-md w-full">
                </div>
                <div class="w-full space-y-1">
                    <label for="" class="block text-sm text-gray-800 font-medium">Sujet</label>
                    <input type="text" name="" id="" class="border-gray-400 text-md rounded-md w-full">
                </div>
                <div class="w-full space-y-1">
                    <label for="" class="block text-sm text-gray-800 font-medium">Message</label>
                    <textarea name="" id="" rows="6" class="border-gray-400 text-md rounded-md w-full"></textarea>
                </div>

                <div class="flex justify-center lg:justify-end">
                    <button class="w-1/2 lg:w-auto px-4 py-2 bg-blue-800 text-white text-sm font-medium rounded-md">Envoyer</button>
                </div>
            </div>
        </form>
    </section>

</x-web-layout>