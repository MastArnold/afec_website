<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>

    <section class="px-8 lg:px-32 py-12 lg:py-24">

        <!-- Couverture -->
        <div class="w-full lg:w-auto lg:h-[60vh] aspect-square lg:aspect-video overflow-hidden mx-auto rounded-3xl mb-4">
            <img class="w-full h-full object-cover object-center" src="https://images.unsplash.com/photo-1736618625357-2a7f197f8c23?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw1fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=600" alt="Couverture (titre)">
        </div>

        <!-- Article -->
        <div class="space-y-8 lg:space-y-12 mb-8 lg:px-32">
            <!-- Infos -->
            <div class="space-y-2">
                <div class="flex items-center gap-2">
                    <span class="text-lg text-gray-600">Auteur</span>
                    <span class="text-sm text-gray-800 font-bold">Date</span>
                </div>
                <div class="flex items-center gap-6">
                    <svg class="w-12 aspect-[73/20]" viewBox="0 0 73 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10H71M2 10L10 2M2 10L10 18" stroke="#323232" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <h1 class="text-4xl text-gray-800 font-bold">Titre</h1>
                </div>
            </div>

            <!-- Contenu -->
            <p class="text-lg/7 text-gray-700">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio vel fuga et minus 
                consequuntur at mollitia nisi in aperiam. Facilis, fuga vel. Dolor eaque aut neque 
                numquam molestias cum sapiente. <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, corrupti dolorem 
                dicta sint autem quod itaque, rerum animi atque praesentium illum iure laboriosam vel 
                provident maxime? Quia dolorum nemo perferendis? <br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat inventore eos nulla 
                voluptatum modi! Nisi quidem tempora necessitatibus et illo, distinctio provident unde 
                labore laboriosam est delectus perspiciatis. Mollitia, nihil.<br>
            </p>
        </div>

        <!-- Images -->
        <div class="w-full overflow-x-auto mb-8">
            <div class="flex space-x-4 py-4">
                @foreach ([1,1,1,1,1,1,1,1,1,1,1,1] as $i)
                    <div class="relative w-[80%] lg:w-[40%] aspect-square lg:aspect-video overflow-hidden
                                rounded-3xl bg-cover bg-center flex-shrink-0">
                        <img class="w-full h-full object-cover object-center" src="https://images.unsplash.com/photo-1762576866403-315024b3a453?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxOXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=600" alt="Image (titre)">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Documents -->
        <div class="space-y-6">
            <h5 class="text-blue-900 font-bold text-2xl text-center lg:text-left">Documents de l'article</h5>

            <div class="w-full flex flex-wrap justify-center lg:justify-between gap-6">
                <div class="p-4 bg-red-50 rounded-md space-y-8">
                    <div class="flex items-center gap-3">
                        <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 17H13M9 13H13M9 9H10M17 18V21M17 15H17.01M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H13M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V11.5" class="stroke-red-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span class="text-sm text-red-600 font-bold">Nom du document</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="#" class="inline-block bg-red-100 p-2 rounded-full">
                            <svg class="w-4 hover:w-6 transition-all" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 20.8201C15.426 22.392 8.574 22.392 2 20.8201" class="stroke-red-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9492 2V16" class="stroke-red-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.8996 11.8L13.3796 15.4099C13.2011 15.5978 12.9863 15.7476 12.7482 15.8499C12.5101 15.9521 12.2538 16.0046 11.9946 16.0046C11.7355 16.0046 11.4791 15.9521 11.241 15.8499C11.0029 15.7476 10.7881 15.5978 10.6096 15.4099L7.09961 11.8" class="stroke-red-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </a>
                        <span class="text-xs text-red-600 font-bold">Télécharger</span>
                    </div>
                </div>
                <div class="p-4 bg-blue-50 rounded-md space-y-8">
                    <div class="flex items-center gap-3">
                        <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 17H13M9 13H13M9 9H10M17 18V21M17 15H17.01M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H13M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V11.5" class="stroke-blue-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span class="text-sm text-blue-600 font-bold">Nom du document</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="#" class="inline-block bg-blue-100 p-2 rounded-full">
                            <svg class="w-4 hover:w-6 transition-all" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 20.8201C15.426 22.392 8.574 22.392 2 20.8201" class="stroke-blue-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9492 2V16" class="stroke-blue-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.8996 11.8L13.3796 15.4099C13.2011 15.5978 12.9863 15.7476 12.7482 15.8499C12.5101 15.9521 12.2538 16.0046 11.9946 16.0046C11.7355 16.0046 11.4791 15.9521 11.241 15.8499C11.0029 15.7476 10.7881 15.5978 10.6096 15.4099L7.09961 11.8" class="stroke-blue-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </a>
                        <span class="text-xs text-blue-600 font-bold">Télécharger</span>
                    </div>
                </div>
                <div class="p-4 bg-emerald-50 rounded-md space-y-8">
                    <div class="flex items-center gap-3">
                        <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 17H13M9 13H13M9 9H10M17 18V21M17 15H17.01M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H13M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V11.5" class="stroke-emerald-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span class="text-sm text-emerald-600 font-bold">Nom du document</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="#" class="inline-block bg-emerald-100 p-2 rounded-full">
                            <svg class="w-4 hover:w-6 transition-all" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 20.8201C15.426 22.392 8.574 22.392 2 20.8201" class="stroke-emerald-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9492 2V16" class="stroke-emerald-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.8996 11.8L13.3796 15.4099C13.2011 15.5978 12.9863 15.7476 12.7482 15.8499C12.5101 15.9521 12.2538 16.0046 11.9946 16.0046C11.7355 16.0046 11.4791 15.9521 11.241 15.8499C11.0029 15.7476 10.7881 15.5978 10.6096 15.4099L7.09961 11.8" class="stroke-emerald-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </a>
                        <span class="text-xs text-emerald-600 font-bold">Télécharger</span>
                    </div>
                </div>
                <div class="p-4 bg-amber-50 rounded-md space-y-8">
                    <div class="flex items-center gap-3">
                        <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 17H13M9 13H13M9 9H10M17 18V21M17 15H17.01M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H13M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V11.5" class="stroke-amber-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span class="text-sm text-amber-600 font-bold">Nom du document</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="#" class="inline-block bg-amber-100 p-2 rounded-full">
                            <svg class="w-4 hover:w-6 transition-all" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 20.8201C15.426 22.392 8.574 22.392 2 20.8201" class="stroke-amber-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9492 2V16" class="stroke-amber-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.8996 11.8L13.3796 15.4099C13.2011 15.5978 12.9863 15.7476 12.7482 15.8499C12.5101 15.9521 12.2538 16.0046 11.9946 16.0046C11.7355 16.0046 11.4791 15.9521 11.241 15.8499C11.0029 15.7476 10.7881 15.5978 10.6096 15.4099L7.09961 11.8" class="stroke-amber-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </a>
                        <span class="text-xs text-amber-600 font-bold">Télécharger</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-web-layout>