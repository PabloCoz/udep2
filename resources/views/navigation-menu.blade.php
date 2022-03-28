<div class="md:min-h-screen md:flex w-full md:w-64">

    <!-- mobile menu bar -->
    <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden ">
        <!-- logo -->
        <a href="#" class="block p-4 text-white font-bold">Logo</a>

        <!-- mobile menu button -->
        <button id="mobile-menu-button" class=" p-4 focus:outline-none focus:bg-gray-700">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <div id="sidebar"
        class=" bg-gray-800 text-gray-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">


        <a href="#">
            <img class="object-contain" src="{{asset('img/logo2.png')}}" alt="">
        </a>

        <nav class="pt-10 space-y-3">
            <a href="#"
                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black">
                Home
            </a>
            <a href="{{ route('exams.index') }}"
                class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('exams.index') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black ">
                Examenes
            </a>
            <a href=""
                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black">
                Baterias
            </a>
            <a href="{{ route('users') }}"
                class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('users') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black">
                Alumnos
            </a>
            <a href="{{ route('messages') }}"
                class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black justify-between">
                <span class="">Mensajes</span>
                <span
                    class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-bold text-white bg-red-500 rounded-full">3</span>
            </a>
            <a href="{{ route('profile.show') }}"
                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black">
                Configuraciones
            </a>
            <form method="POST" action="{{ route('logout') }}"
                class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black"
                action="">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                 this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </nav>
    </div>
</div>


<script>
    const btn = document.querySelector("#mobile-menu-button");
    const sidebar = document.querySelector("#sidebar");
    let isSidebarOpen = false;

    btn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });
</script>
