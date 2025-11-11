<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>

    <x-slot name="header">
        <header class="relative w-full flex flex-col lg:flex-row justify-between gap-4 bg-white px-8 lg:px-24 pt-32 pb-8 lg:pt-32 lg:pb-32">
            <div class="w-full lg:w-3/5" data-aos="fade-up" data-aos-delay="200">
                <div class="space-y-8 lg:space-y-16">
                    <h1 class="text-gray-900 text-3xl lg:text-6xl font-bold font-sans text-center lg:text-left">Ce que nous sommes, <br> notre mission, <br> nos valeurs...</h1>
                    <p class="text-gray-600 leading-relaxed text-xl lg:text-lg text-left lg:pr-32">Lorem ipsum dolor sit amet, 
                        consectetur adipisicing elit. Officiis non, consequatur adipisci consectetur
                        blanditiis commodi velit. Laborum, voluptate reiciendis eum cum enim commodi 
                        unde magni odit repellat hic velit blanditiis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nihil minus reiciendis 
                        sunt laboriosam illum eius neque vero? Voluptas error molestias aspernatur quis 
                        odit adipisci veniam assumenda illum similique dolorum.
                    </p>
                </div>
            </div>
            <div class="w-full lg:w-2/5 mt-8 lg:mt-0" data-aos="fade-up">
                <div class="w-full flex flex-row gap-8">
                    <div class="w-1/2 flex flex-col gap-8">
                        <div class="w-full aspect-[9/12] bg-cover rounded-lg" style="background-image: url('{{ asset('storage/about/col-1-row-1.jpg') }}');"></div>
                        <div class="w-full aspect-[9/12] bg-cover rounded-lg" style="background-image: url('{{ asset('storage/about/col-1-row-2.jpg') }}');"></div>
                    </div>
                    <div class="w-1/2 flex flex-col gap-8 mt-28">
                        <div class="w-full aspect-[9/12] bg-cover bg-center rounded-lg" style="background-image: url('{{ asset('storage/about/col-2-row-1.jpg') }}');"></div>
                        <div class="w-full aspect-[9/12] bg-cover rounded-lg" style="background-image: url('{{ asset('storage/about/col-2-row-2.jpg') }}');"></div>
                    </div>
                </div>
            </div>
        </header>
    </x-slot>
    
    <!-- Mission -->
    <section class="w-full px-8 lg:px-32 py-8 lg:py-16" data-aos="fade-up" data-aos-delay="300">
        <h1 class="text-4xl lg:text-3xl text-center lg:text-left text-gray-600 font-bold">Notre mission</h1>

        <div class="w-full flex flex-col-reverse lg:flex-row justify-between py-8 lg:py-12">
            <div class="w-full lg:w-3/5 space-y-16 text-lg text-gray-600">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis dignissimos cupiditate doloremque ex reprehenderit, recusandae a suscipit expedita libero ipsa possimus maiores architecto, aspernatur magni consequatur? Similique a beatae laborum!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas quidem in cum recusandae exercitationem. Aperiam nihil rerum, nostrum alias voluptatibus, illum recusandae doloribus veniam dicta tenetur incidunt, quaerat temporibus facere?</p>
            </div>
            <div class="w-full lg:w-2/5 flex flex-col items-center lg:items-start gap-4 lg:gap-12 pb-8 lg:pb-0 lg:pl-32">
                <div class="flex flex-col gap-1 lg:gap-2">
                    <span class="text-3xl lg:text-4xl text-gray-900 font-sans font-bold">+ 620</span>
                    <span class="text-sm lg:text-md text-gray-600 font-sans">Projets</span>
                </div>
                <div class="flex flex-col gap-1 lg:gap-2">
                    <span class="text-3xl lg:text-4xl text-gray-900 font-sans font-bold">+ 2000</span>
                    <span class="text-sm lg:text-md text-gray-600 font-sans">Interventions</span>
                </div>
                <div class="flex flex-col gap-1 lg:gap-2">
                    <span class="text-3xl lg:text-4xl text-gray-900 font-sans font-bold">+ 44 million</span>
                    <span class="text-sm lg:text-md text-gray-600 font-sans">De collectes de don</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Transition -->
    <section class="w-full h-[30vh] lg:h-[50vh] bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('storage/about/transition.jpg') }}');">
    </section>

    <!-- Valeurs -->
    <section class="px-8 lg:px-32 py-8 lg:py-16 space-y-8">
        <div data-aos="fade-up">
            <h4 class="text-3xl lg:text-3xl text-gray-800 font-bold font-sans">Nos valeurs</h4>
            <p class="text-xl text-gray-600">Nos valeurs</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-4">
                    <svg class="w-12" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5416 13.5936C27.1257 12.0632 28.4179 11.298 29.3669 11.8409C30.3159 12.3839 30.2931 13.8754 30.2477 16.8584L30.2361 17.6301C30.2232 18.4778 30.2167 18.9016 30.3747 19.2741C30.5327 19.6464 30.8372 19.9254 31.4462 20.4832L32.0006 20.9911C34.1437 22.9542 35.2152 23.9358 34.9641 25.0381C34.7129 26.1403 33.3052 26.6333 30.4902 27.6191L29.7619 27.8743C28.9619 28.1544 28.5619 28.2944 28.2551 28.5753C27.9482 28.8563 27.7692 29.2461 27.4112 30.0256L27.0854 30.7354C25.8256 33.4791 25.1957 34.8509 24.0916 34.9893C22.9874 35.1276 22.1401 33.9408 20.4456 31.5671L20.0072 30.9529C19.5257 30.2784 19.2849 29.9413 18.9372 29.7423C18.5897 29.5434 18.1746 29.5054 17.3442 29.4294L16.5885 29.3603C13.6668 29.0929 12.206 28.9591 11.7748 27.9424C11.3435 26.9256 12.2275 25.6991 13.9953 23.2462L14.4527 22.6116C14.9551 21.9146 15.2063 21.5661 15.2983 21.1622C15.3903 20.7586 15.3127 20.3452 15.1576 19.5186L15.0163 18.7661C14.4704 15.8571 14.1974 14.4027 15.0351 13.636C15.8728 12.8693 17.2664 13.2981 20.0534 14.1557L20.7746 14.3776C21.5666 14.6214 21.9626 14.7432 22.3671 14.6925C22.7716 14.6419 23.1387 14.4244 23.8731 13.9895L24.5416 13.5936Z" fill="#0B2393"/>
                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.9495 3.28286C15.4376 2.79471 16.2291 2.79471 16.7172 3.28286L20.0505 6.61619C20.5387 7.10434 20.5387 7.89581 20.0505 8.38396C19.5624 8.87211 18.771 8.87211 18.2829 8.38396L14.9495 5.05063C14.4613 4.56248 14.4613 3.77101 14.9495 3.28286ZM5.78282 5.78286C6.27097 5.29471 7.06244 5.29471 7.55059 5.78286L11.7173 9.94953C12.2054 10.4377 12.2054 11.2291 11.7173 11.7173C11.2291 12.2054 10.4376 12.2054 9.94949 11.7173L5.78282 7.55063C5.29467 7.06248 5.29467 6.27101 5.78282 5.78286ZM20.7829 9.11619C21.271 8.62804 22.0624 8.62804 22.5505 9.11619L23.3839 9.94953C23.872 10.4377 23.872 11.2291 23.3839 11.7173C22.8957 12.2054 22.1044 12.2054 21.6162 11.7173L20.7829 10.884C20.2947 10.3958 20.2947 9.60434 20.7829 9.11619ZM2.44949 12.4495C2.93764 11.9614 3.7291 11.9614 4.21725 12.4495L5.05059 13.2829C5.53874 13.771 5.53874 14.5625 5.05059 15.0506C4.56244 15.5388 3.77097 15.5388 3.28282 15.0506L2.44949 14.2173C1.96134 13.7291 1.96134 12.9377 2.44949 12.4495ZM6.61615 16.6162C7.1043 16.128 7.89577 16.128 8.38392 16.6162L10.8839 19.1162C11.3721 19.6044 11.3721 20.3957 10.8839 20.8839C10.3958 21.3721 9.6043 21.3721 9.11615 20.8839L6.61615 18.3839C6.128 17.8957 6.128 17.1044 6.61615 16.6162Z" fill="#0B2393"/>
                    </svg>

                    <p class="text-lg text-blue-800 font-bold">Valeur 1</p>
                </div>
                
                <p class="text-gray-600 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse accusantium sequi ea et in. Accusantium, non expedita possimus quisquam mollitia, facere nihil animi earum laboriosam eaque deserunt voluptatibus laborum illo!</p>
            </div>
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center gap-4">
                    <svg class="w-12" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5416 13.5936C27.1257 12.0632 28.4179 11.298 29.3669 11.8409C30.3159 12.3839 30.2931 13.8754 30.2477 16.8584L30.2361 17.6301C30.2232 18.4778 30.2167 18.9016 30.3747 19.2741C30.5327 19.6464 30.8372 19.9254 31.4462 20.4832L32.0006 20.9911C34.1437 22.9542 35.2152 23.9358 34.9641 25.0381C34.7129 26.1403 33.3052 26.6333 30.4902 27.6191L29.7619 27.8743C28.9619 28.1544 28.5619 28.2944 28.2551 28.5753C27.9482 28.8563 27.7692 29.2461 27.4112 30.0256L27.0854 30.7354C25.8256 33.4791 25.1957 34.8509 24.0916 34.9893C22.9874 35.1276 22.1401 33.9408 20.4456 31.5671L20.0072 30.9529C19.5257 30.2784 19.2849 29.9413 18.9372 29.7423C18.5897 29.5434 18.1746 29.5054 17.3442 29.4294L16.5885 29.3603C13.6668 29.0929 12.206 28.9591 11.7748 27.9424C11.3435 26.9256 12.2275 25.6991 13.9953 23.2462L14.4527 22.6116C14.9551 21.9146 15.2063 21.5661 15.2983 21.1622C15.3903 20.7586 15.3127 20.3452 15.1576 19.5186L15.0163 18.7661C14.4704 15.8571 14.1974 14.4027 15.0351 13.636C15.8728 12.8693 17.2664 13.2981 20.0534 14.1557L20.7746 14.3776C21.5666 14.6214 21.9626 14.7432 22.3671 14.6925C22.7716 14.6419 23.1387 14.4244 23.8731 13.9895L24.5416 13.5936Z" fill="#0B2393"/>
                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.9495 3.28286C15.4376 2.79471 16.2291 2.79471 16.7172 3.28286L20.0505 6.61619C20.5387 7.10434 20.5387 7.89581 20.0505 8.38396C19.5624 8.87211 18.771 8.87211 18.2829 8.38396L14.9495 5.05063C14.4613 4.56248 14.4613 3.77101 14.9495 3.28286ZM5.78282 5.78286C6.27097 5.29471 7.06244 5.29471 7.55059 5.78286L11.7173 9.94953C12.2054 10.4377 12.2054 11.2291 11.7173 11.7173C11.2291 12.2054 10.4376 12.2054 9.94949 11.7173L5.78282 7.55063C5.29467 7.06248 5.29467 6.27101 5.78282 5.78286ZM20.7829 9.11619C21.271 8.62804 22.0624 8.62804 22.5505 9.11619L23.3839 9.94953C23.872 10.4377 23.872 11.2291 23.3839 11.7173C22.8957 12.2054 22.1044 12.2054 21.6162 11.7173L20.7829 10.884C20.2947 10.3958 20.2947 9.60434 20.7829 9.11619ZM2.44949 12.4495C2.93764 11.9614 3.7291 11.9614 4.21725 12.4495L5.05059 13.2829C5.53874 13.771 5.53874 14.5625 5.05059 15.0506C4.56244 15.5388 3.77097 15.5388 3.28282 15.0506L2.44949 14.2173C1.96134 13.7291 1.96134 12.9377 2.44949 12.4495ZM6.61615 16.6162C7.1043 16.128 7.89577 16.128 8.38392 16.6162L10.8839 19.1162C11.3721 19.6044 11.3721 20.3957 10.8839 20.8839C10.3958 21.3721 9.6043 21.3721 9.11615 20.8839L6.61615 18.3839C6.128 17.8957 6.128 17.1044 6.61615 16.6162Z" fill="#0B2393"/>
                    </svg>

                    <p class="text-lg text-blue-800 font-bold">Valeur 1</p>
                </div>
                
                <p class="text-gray-600 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse accusantium sequi ea et in. Accusantium, non expedita possimus quisquam mollitia, facere nihil animi earum laboriosam eaque deserunt voluptatibus laborum illo!</p>
            </div>
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="600">
                <div class="flex items-center gap-4">
                    <svg class="w-12" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5416 13.5936C27.1257 12.0632 28.4179 11.298 29.3669 11.8409C30.3159 12.3839 30.2931 13.8754 30.2477 16.8584L30.2361 17.6301C30.2232 18.4778 30.2167 18.9016 30.3747 19.2741C30.5327 19.6464 30.8372 19.9254 31.4462 20.4832L32.0006 20.9911C34.1437 22.9542 35.2152 23.9358 34.9641 25.0381C34.7129 26.1403 33.3052 26.6333 30.4902 27.6191L29.7619 27.8743C28.9619 28.1544 28.5619 28.2944 28.2551 28.5753C27.9482 28.8563 27.7692 29.2461 27.4112 30.0256L27.0854 30.7354C25.8256 33.4791 25.1957 34.8509 24.0916 34.9893C22.9874 35.1276 22.1401 33.9408 20.4456 31.5671L20.0072 30.9529C19.5257 30.2784 19.2849 29.9413 18.9372 29.7423C18.5897 29.5434 18.1746 29.5054 17.3442 29.4294L16.5885 29.3603C13.6668 29.0929 12.206 28.9591 11.7748 27.9424C11.3435 26.9256 12.2275 25.6991 13.9953 23.2462L14.4527 22.6116C14.9551 21.9146 15.2063 21.5661 15.2983 21.1622C15.3903 20.7586 15.3127 20.3452 15.1576 19.5186L15.0163 18.7661C14.4704 15.8571 14.1974 14.4027 15.0351 13.636C15.8728 12.8693 17.2664 13.2981 20.0534 14.1557L20.7746 14.3776C21.5666 14.6214 21.9626 14.7432 22.3671 14.6925C22.7716 14.6419 23.1387 14.4244 23.8731 13.9895L24.5416 13.5936Z" fill="#0B2393"/>
                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.9495 3.28286C15.4376 2.79471 16.2291 2.79471 16.7172 3.28286L20.0505 6.61619C20.5387 7.10434 20.5387 7.89581 20.0505 8.38396C19.5624 8.87211 18.771 8.87211 18.2829 8.38396L14.9495 5.05063C14.4613 4.56248 14.4613 3.77101 14.9495 3.28286ZM5.78282 5.78286C6.27097 5.29471 7.06244 5.29471 7.55059 5.78286L11.7173 9.94953C12.2054 10.4377 12.2054 11.2291 11.7173 11.7173C11.2291 12.2054 10.4376 12.2054 9.94949 11.7173L5.78282 7.55063C5.29467 7.06248 5.29467 6.27101 5.78282 5.78286ZM20.7829 9.11619C21.271 8.62804 22.0624 8.62804 22.5505 9.11619L23.3839 9.94953C23.872 10.4377 23.872 11.2291 23.3839 11.7173C22.8957 12.2054 22.1044 12.2054 21.6162 11.7173L20.7829 10.884C20.2947 10.3958 20.2947 9.60434 20.7829 9.11619ZM2.44949 12.4495C2.93764 11.9614 3.7291 11.9614 4.21725 12.4495L5.05059 13.2829C5.53874 13.771 5.53874 14.5625 5.05059 15.0506C4.56244 15.5388 3.77097 15.5388 3.28282 15.0506L2.44949 14.2173C1.96134 13.7291 1.96134 12.9377 2.44949 12.4495ZM6.61615 16.6162C7.1043 16.128 7.89577 16.128 8.38392 16.6162L10.8839 19.1162C11.3721 19.6044 11.3721 20.3957 10.8839 20.8839C10.3958 21.3721 9.6043 21.3721 9.11615 20.8839L6.61615 18.3839C6.128 17.8957 6.128 17.1044 6.61615 16.6162Z" fill="#0B2393"/>
                    </svg>

                    <p class="text-lg text-blue-800 font-bold">Valeur 1</p>
                </div>
                
                <p class="text-gray-600 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse accusantium sequi ea et in. Accusantium, non expedita possimus quisquam mollitia, facere nihil animi earum laboriosam eaque deserunt voluptatibus laborum illo!</p>
            </div>
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="600">
                <div class="flex items-center gap-4">
                    <svg class="w-12" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5416 13.5936C27.1257 12.0632 28.4179 11.298 29.3669 11.8409C30.3159 12.3839 30.2931 13.8754 30.2477 16.8584L30.2361 17.6301C30.2232 18.4778 30.2167 18.9016 30.3747 19.2741C30.5327 19.6464 30.8372 19.9254 31.4462 20.4832L32.0006 20.9911C34.1437 22.9542 35.2152 23.9358 34.9641 25.0381C34.7129 26.1403 33.3052 26.6333 30.4902 27.6191L29.7619 27.8743C28.9619 28.1544 28.5619 28.2944 28.2551 28.5753C27.9482 28.8563 27.7692 29.2461 27.4112 30.0256L27.0854 30.7354C25.8256 33.4791 25.1957 34.8509 24.0916 34.9893C22.9874 35.1276 22.1401 33.9408 20.4456 31.5671L20.0072 30.9529C19.5257 30.2784 19.2849 29.9413 18.9372 29.7423C18.5897 29.5434 18.1746 29.5054 17.3442 29.4294L16.5885 29.3603C13.6668 29.0929 12.206 28.9591 11.7748 27.9424C11.3435 26.9256 12.2275 25.6991 13.9953 23.2462L14.4527 22.6116C14.9551 21.9146 15.2063 21.5661 15.2983 21.1622C15.3903 20.7586 15.3127 20.3452 15.1576 19.5186L15.0163 18.7661C14.4704 15.8571 14.1974 14.4027 15.0351 13.636C15.8728 12.8693 17.2664 13.2981 20.0534 14.1557L20.7746 14.3776C21.5666 14.6214 21.9626 14.7432 22.3671 14.6925C22.7716 14.6419 23.1387 14.4244 23.8731 13.9895L24.5416 13.5936Z" fill="#0B2393"/>
                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.9495 3.28286C15.4376 2.79471 16.2291 2.79471 16.7172 3.28286L20.0505 6.61619C20.5387 7.10434 20.5387 7.89581 20.0505 8.38396C19.5624 8.87211 18.771 8.87211 18.2829 8.38396L14.9495 5.05063C14.4613 4.56248 14.4613 3.77101 14.9495 3.28286ZM5.78282 5.78286C6.27097 5.29471 7.06244 5.29471 7.55059 5.78286L11.7173 9.94953C12.2054 10.4377 12.2054 11.2291 11.7173 11.7173C11.2291 12.2054 10.4376 12.2054 9.94949 11.7173L5.78282 7.55063C5.29467 7.06248 5.29467 6.27101 5.78282 5.78286ZM20.7829 9.11619C21.271 8.62804 22.0624 8.62804 22.5505 9.11619L23.3839 9.94953C23.872 10.4377 23.872 11.2291 23.3839 11.7173C22.8957 12.2054 22.1044 12.2054 21.6162 11.7173L20.7829 10.884C20.2947 10.3958 20.2947 9.60434 20.7829 9.11619ZM2.44949 12.4495C2.93764 11.9614 3.7291 11.9614 4.21725 12.4495L5.05059 13.2829C5.53874 13.771 5.53874 14.5625 5.05059 15.0506C4.56244 15.5388 3.77097 15.5388 3.28282 15.0506L2.44949 14.2173C1.96134 13.7291 1.96134 12.9377 2.44949 12.4495ZM6.61615 16.6162C7.1043 16.128 7.89577 16.128 8.38392 16.6162L10.8839 19.1162C11.3721 19.6044 11.3721 20.3957 10.8839 20.8839C10.3958 21.3721 9.6043 21.3721 9.11615 20.8839L6.61615 18.3839C6.128 17.8957 6.128 17.1044 6.61615 16.6162Z" fill="#0B2393"/>
                    </svg>

                    <p class="text-lg text-blue-800 font-bold">Valeur 1</p>
                </div>
                
                <p class="text-gray-600 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse accusantium sequi ea et in. Accusantium, non expedita possimus quisquam mollitia, facere nihil animi earum laboriosam eaque deserunt voluptatibus laborum illo!</p>
            </div>
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center gap-4">
                    <svg class="w-12" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5416 13.5936C27.1257 12.0632 28.4179 11.298 29.3669 11.8409C30.3159 12.3839 30.2931 13.8754 30.2477 16.8584L30.2361 17.6301C30.2232 18.4778 30.2167 18.9016 30.3747 19.2741C30.5327 19.6464 30.8372 19.9254 31.4462 20.4832L32.0006 20.9911C34.1437 22.9542 35.2152 23.9358 34.9641 25.0381C34.7129 26.1403 33.3052 26.6333 30.4902 27.6191L29.7619 27.8743C28.9619 28.1544 28.5619 28.2944 28.2551 28.5753C27.9482 28.8563 27.7692 29.2461 27.4112 30.0256L27.0854 30.7354C25.8256 33.4791 25.1957 34.8509 24.0916 34.9893C22.9874 35.1276 22.1401 33.9408 20.4456 31.5671L20.0072 30.9529C19.5257 30.2784 19.2849 29.9413 18.9372 29.7423C18.5897 29.5434 18.1746 29.5054 17.3442 29.4294L16.5885 29.3603C13.6668 29.0929 12.206 28.9591 11.7748 27.9424C11.3435 26.9256 12.2275 25.6991 13.9953 23.2462L14.4527 22.6116C14.9551 21.9146 15.2063 21.5661 15.2983 21.1622C15.3903 20.7586 15.3127 20.3452 15.1576 19.5186L15.0163 18.7661C14.4704 15.8571 14.1974 14.4027 15.0351 13.636C15.8728 12.8693 17.2664 13.2981 20.0534 14.1557L20.7746 14.3776C21.5666 14.6214 21.9626 14.7432 22.3671 14.6925C22.7716 14.6419 23.1387 14.4244 23.8731 13.9895L24.5416 13.5936Z" fill="#0B2393"/>
                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.9495 3.28286C15.4376 2.79471 16.2291 2.79471 16.7172 3.28286L20.0505 6.61619C20.5387 7.10434 20.5387 7.89581 20.0505 8.38396C19.5624 8.87211 18.771 8.87211 18.2829 8.38396L14.9495 5.05063C14.4613 4.56248 14.4613 3.77101 14.9495 3.28286ZM5.78282 5.78286C6.27097 5.29471 7.06244 5.29471 7.55059 5.78286L11.7173 9.94953C12.2054 10.4377 12.2054 11.2291 11.7173 11.7173C11.2291 12.2054 10.4376 12.2054 9.94949 11.7173L5.78282 7.55063C5.29467 7.06248 5.29467 6.27101 5.78282 5.78286ZM20.7829 9.11619C21.271 8.62804 22.0624 8.62804 22.5505 9.11619L23.3839 9.94953C23.872 10.4377 23.872 11.2291 23.3839 11.7173C22.8957 12.2054 22.1044 12.2054 21.6162 11.7173L20.7829 10.884C20.2947 10.3958 20.2947 9.60434 20.7829 9.11619ZM2.44949 12.4495C2.93764 11.9614 3.7291 11.9614 4.21725 12.4495L5.05059 13.2829C5.53874 13.771 5.53874 14.5625 5.05059 15.0506C4.56244 15.5388 3.77097 15.5388 3.28282 15.0506L2.44949 14.2173C1.96134 13.7291 1.96134 12.9377 2.44949 12.4495ZM6.61615 16.6162C7.1043 16.128 7.89577 16.128 8.38392 16.6162L10.8839 19.1162C11.3721 19.6044 11.3721 20.3957 10.8839 20.8839C10.3958 21.3721 9.6043 21.3721 9.11615 20.8839L6.61615 18.3839C6.128 17.8957 6.128 17.1044 6.61615 16.6162Z" fill="#0B2393"/>
                    </svg>

                    <p class="text-lg text-blue-800 font-bold">Valeur 1</p>
                </div>
                
                <p class="text-gray-600 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse accusantium sequi ea et in. Accusantium, non expedita possimus quisquam mollitia, facere nihil animi earum laboriosam eaque deserunt voluptatibus laborum illo!</p>
            </div>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="relative w-full lg:min-h-[70vh] px-8 lg:px-32 bg-cover bg-center" data-aos="fade-down" data-aos-delay="300"
            style="background-image: url('https://images.unsplash.com/photo-1558522195-e1201b090344?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFydG5lcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=600'); background-size: cover; background-position: center;">
        <div class="py-12 space-y-8 lg:space-y-16">        
            <h4 class="relative z-10 text-2xl lg:text-3xl text-gray-800 font-bold text-center">Nos partenaires nous font confiance</h4>
            
            <div class="relative z-10 flex flex-wrap gap-8 lg:gap-32 items-center justify-center">
                @foreach ([11,1,1,11,1,1,1,11,1,1,1] as $i)
                    <a href="#" class="w-12 lg:w-24">
                        <svg class="w-full" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 65.3125C26.0203 65.3125 14.6875 53.9797 14.6875 40C14.6875 26.0203 26.0203 14.6875 40 14.6875C53.9797 14.6875 65.3125 26.0203 65.3125 40C65.3125 53.9797 53.9797 65.3125 40 65.3125ZM47.0406 21.2063C44.8338 20.4056 42.5038 19.9973 40.1562 20C37.7093 19.9971 35.2823 20.4408 32.9947 21.3094C35.1637 23.6372 37.3595 25.9399 39.5819 28.2169C39.8225 28.4637 40.22 28.4688 40.4666 28.2288C40.4666 28.2288 44.4659 24.4053 47.0409 21.2063H47.0406ZM47.0406 59.2172C44.4659 56.0181 40.4625 52.1344 40.4625 52.1344C40.4043 52.0773 40.3353 52.0323 40.2596 52.002C40.1839 51.9717 40.1029 51.9568 40.0214 51.958C39.9399 51.9591 39.8594 51.9765 39.7846 52.009C39.7098 52.0414 39.6422 52.0884 39.5856 52.1472C39.5856 52.1472 36.3919 55.4612 32.995 59.1141C35.2825 59.9826 37.7094 60.4263 40.1562 60.4234C42.5038 60.4261 44.8338 60.0179 47.0406 59.2172ZM28.0962 23.9159C28.0962 23.9159 19.965 29.4453 19.965 40.0216C19.965 50.5981 28.0962 56.7294 28.0962 56.7294L39.9994 44.2959L51.9919 56.2616C51.9919 56.2616 60.5509 49.5788 60.5509 39.9909C60.5509 30.4028 51.8825 23.8416 51.8825 23.8416L43.86 32.0666L48.0444 36.3906L52.1419 32.7406C52.1419 32.7406 54.3094 36.1022 54.3403 39.9759C54.3709 43.8497 52.2612 47.7584 52.2612 47.7584L40.0141 35.5906L28.2969 47.6813C28.2969 47.6813 25.8956 44.0531 25.9062 39.8681C25.9172 35.6828 28.0962 32.0662 28.0962 32.0662L32.0806 35.9688L36.7669 32.0284L28.0962 23.9159Z" fill="black"/>
                        </svg>
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
            <p class="text-xl text-gray-600">Lorem ipsum</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            @foreach ([1,1,1,1,1,1,1,1,1,1,1] as $i)
                <div class="space-y-4 lg:space-y-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="w-16 h-16 rounded-full overflow-hidden mx-auto">
                        <img class="w-full object-cover scale-110" src="https://images.unsplash.com/photo-1761872936205-88ce12255c24?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDQyfHRvd0paRnNrcEdnfHxlbnwwfHx8fHw%3D&auto=format&fit=crop&q=60&w=600" alt="photo equipe">
                    </div>

                    <div class="space-y-2 text-center">
                        <p class="text-sm font-bold text-gray-800">John DOE</p>
                        <p class="text-sm text-gray-600">CEO Ingeniere</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Rapport et publication -->
    <section class="w-full px-8 lg:px-32 py-8 lg:py-16 space-y-4 lg:space-y-8" data-aos="fade-up" data-aos-delay="300">
        <div class="space-y-1">
            <h4 class="text-4xl lg:text-3xl text-gray-800 font-sans font-bold">Nos rapports et publications</h4>
            <p class="text-xl text-gray-600">Rapport et publication</p>
        </div>

        <div class="w-full overflow-x-auto">
            <div class="flex space-x-4 py-4">
                @foreach ([1,1,11,11,1,1,1,11,1] as $item)
                    <a href="#" class="inline-block relative w-3/5 lg:w-2/5 aspect-[9/12] lg:aspect-[9/10] rounded-md bg-cover bg-center px-4 lg:px-8 py-12 flex-shrink-0 rounded-md overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1761960084284-c3fa68e5c2cd?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDQ0fHRvd0paRnNrcEdnfHxlbnwwfHx8fHw%3D&auto=format&fit=crop&q=60&w=600');">
                        <div class="absolute z-20 bottom-8 lg:bottom-4 flex flex-col gap-2">
                            <p class="font-bold text-gray-50">08-11-2025</p>
                            <p class="w-full lg:w-1/2 font-bold text-xl lg:text-2xl text-gray-300">Un livre peut en cacher un autre</p>
                        </div>

                        <div class="absolute inset-0 bg-black/30 z-10"></div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

</x-web-layout>