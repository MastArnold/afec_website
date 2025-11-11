<x-web-layout>
    <x-slot name="title" :title="$title"></x-slot>

    <section class="px-8 lg:px-32 py-24" id="gallery">
        <div class="space-y-3 lg:space-y-2">
            <h1 class="text-4xl text-gray-800 font-bold text-center lg:text-left">Galerie AFEC</h1>
            <p class="text-gray-600 text-md text-center lg:text-left">Parcourez notre galerie et découvrez nos projets, notre histoire, ...</p>
        </div>

        <!-- Gallery -->
        <div class="mt-8">
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-4 space-y-4">
                <button type="button" class="relative group overflow-hidden rounded-md break-inside-avoid w-full text-left gallery-item" data-title="Projet Architecture" data-description="Maquette d'un nouveau centre communautaire." data-date="2024-06-12" data-src="https://images.unsplash.com/photo-1554629947-334ff61d85dc?q=90">
                    <img class="w-full h-auto object-cover block" src="https://images.unsplash.com/photo-1554629947-334ff61d85dc?q=90" alt="Projet Architecture">
                    <div class="pointer-events-none absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="pointer-events-none absolute bottom-0 left-0 right-0 p-3 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="block text-sm font-medium">Projet Architecture</span>
                    </div>
                </button>

                <button type="button" class="relative group overflow-hidden rounded-md break-inside-avoid w-full text-left gallery-item" data-title="Atelier en plein air" data-description="Séance de travail collaboratif en extérieur." data-date="2023-11-03" data-src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?q=90">
                    <img class="w-full h-auto object-cover block" src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?q=90" alt="Atelier en plein air">
                    <div class="pointer-events-none absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="pointer-events-none absolute bottom-0 left-0 right-0 p-3 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="block text-sm font-medium">Atelier en plein air</span>
                    </div>
                </button>

                <button type="button" class="relative group overflow-hidden rounded-md break-inside-avoid w-full text-left gallery-item" data-title="Portrait" data-description="Portrait capturé lors d'un atelier créatif." data-date="2024-04-28" data-src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=90">
                    <img class="w-full h-auto object-cover block" src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=90" alt="Portrait">
                    <div class="pointer-events-none absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="pointer-events-none absolute bottom-0 left-0 right-0 p-3 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="block text-sm font-medium">Portrait</span>
                    </div>
                </button>

                <button type="button" class="relative group overflow-hidden rounded-md break-inside-avoid w-full text-left gallery-item" data-title="Portrait" data-description="Portrait capturé lors d'un atelier créatif." data-date="2024-04-28" data-src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=90">
                    <img class="w-full h-auto object-cover block" src="https://images.unsplash.com/photo-1761839257349-037aea1d94de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDF8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw0M3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=600" alt="Portrait">
                    <div class="pointer-events-none absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="pointer-events-none absolute bottom-0 left-0 right-0 p-3 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="block text-sm font-medium">Portrait</span>
                    </div>
                </button>

                <button type="button" class="relative group overflow-hidden rounded-md break-inside-avoid w-full text-left gallery-item" data-title="Portrait" data-description="Portrait capturé lors d'un atelier créatif." data-date="2024-04-28" data-src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=90">
                    <img class="w-full h-auto object-cover block" src="https://images.unsplash.com/photo-1762320386358-1cab0df757d1?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDh8eEh4WVRNSExnT2N8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=600" alt="Portrait">
                    <div class="pointer-events-none absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="pointer-events-none absolute bottom-0 left-0 right-0 p-3 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="block text-sm font-medium">Portrait</span>
                    </div>
                </button>

                <button type="button" class="relative group overflow-hidden rounded-md break-inside-avoid w-full text-left gallery-item" data-title="Portrait" data-description="Portrait capturé lors d'un atelier créatif." data-date="2024-04-28" data-src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=90">
                    <img class="w-full h-auto object-cover block" src="https://images.unsplash.com/photo-1762304832633-78a122a6f456?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfHhIeFlUTUhMZ09jfHxlbnwwfHx8fHw%3D&auto=format&fit=crop&q=60&w=600" alt="Portrait">
                    <div class="pointer-events-none absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="pointer-events-none absolute bottom-0 left-0 right-0 p-3 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="block text-sm font-medium">Portrait</span>
                    </div>
                </button>

                
            </div>

            <div id="image-modal" class="fixed inset-0 bg-black/60 hidden items-center justify-center p-4 z-50">
                <div class="bg-white rounded-lg shadow-xl max-w-3xl w-full overflow-hidden">
                    <div class="hidden flex justify-end items-center p-4 border-b">
                        <button type="button" id="modal-close" class="text-2xl leading-none text-gray-500 hover:text-gray-700">&times;</button>
                    </div>
                    <div class="pl-0 pr-0 lg:pr-4 py-0 grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div>
                            <img id="modal-image" class="w-full h-auto object-cover rounded" src="" alt="">
                        </div>
                        <div class="space-y-2 px-4 lg:px-0 py-4">
                            <p class="text-sm text-gray-500"><span id="modal-date"></span></p>
                            <h2 id="modal-title" class="text-xl font-semibold text-gray-800"></h2>
                            <p id="modal-description" class="text-gray-700"></p>
                        </div>
                    </div>
                    <div class="hidden p-4 border-t flex justify-end">
                        <button type="button" id="modal-close-2" class="px-4 py-2 bg-gray-800 text-white rounded-md">Fermer</button>
                    </div>
                </div>
            </div>

            <script>
                (function () {
                    var modal = document.getElementById('image-modal');
                    var modalImg = document.getElementById('modal-image');
                    var modalTitle = document.getElementById('modal-title');
                    var modalDesc = document.getElementById('modal-description');
                    var modalDate = document.getElementById('modal-date');
                    var closeButtons = [
                        document.getElementById('modal-close'),
                        document.getElementById('modal-close-2')
                    ];

                    function openModal(data) {
                        modalTitle.textContent = data.title || '';
                        modalDesc.textContent = data.description || '';
                        modalDate.textContent = data.date || '';
                        modalImg.src = data.src || '';
                        modalImg.alt = data.title || '';
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                    }

                    function closeModal() {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                        modalImg.src = '';
                    }

                    document.querySelectorAll('.gallery-item').forEach(function (el) {
                        el.addEventListener('click', function () {
                            openModal({
                                title: el.getAttribute('data-title'),
                                description: el.getAttribute('data-description'),
                                date: el.getAttribute('data-date'),
                                src: el.getAttribute('data-src')
                            });
                        });
                    });

                    closeButtons.forEach(function (btn) {
                        btn && btn.addEventListener('click', closeModal);
                    });

                    modal.addEventListener('click', function (e) {
                        if (e.target === modal) closeModal();
                    });

                    document.addEventListener('keydown', function (e) {
                        if (e.key === 'Escape') closeModal();
                    });
                })();
            </script>
        </div>
    </section>
</x-web-layout>