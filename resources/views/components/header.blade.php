<div class="bg-white shadow-md sticky top-0" x-data="{ isOpen: false }">
    <nav class="container px-6 py-2 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a class=""
                href="/">
               <div class="w-32 h-12 md:w-36  bg-center bg-cover" style="background-image: url({{asset('/assets/logo.jpeg')}})"></div>
            </a>
            <!-- Mobile menu button -->
            <div @click="isOpen = !isOpen" class="flex md:hidden">
                <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="isOpen ? 'flex' : 'hidden'"
            class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
            <a class="text-gray-800 font-semibold text-lg hover:text-yellow-600 hover:font-bold hover:underline {{request()->routeIs('home')?'underline text-green-600':''}}"
                href="/">Inicio</a>
            <a class="text-gray-800 font-semibold text-lg hover:text-yellow-600 hover:font-bold hover:underline {{request()->routeIs('menu')?'underline text-green-600':''}}"
                href="/menu">Nuestro Menú</a>
            <a class="text-gray-800 font-semibold text-lg hover:text-yellow-600 hover:font-bold hover:underline {{request()->routeIs('about')?'underline text-green-600':''}}"
                href="/about">Conócenos</a>
            <a class="text-gray-800 font-semibold text-lg hover:text-yellow-600 hover:font-bold hover:underline {{request()->routeIs('contact')?'underline text-green-600':''}}"
                href="/contact">Contacto</a>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
        </div>
    </nav>
</div>
