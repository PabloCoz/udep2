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
            <img class="object-contain" src="{{ asset('img/logo2.png') }}" alt="">
        </a>

        <nav class="pt-10 space-y-3">
            @can('Listar Examen')
                <a href="{{ route('exams.index') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('exams.index') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black ">
                    Examenes
                </a>
                <a href="{{ route('battery') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('battery') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black">
                    Baterias
                </a>
            @endcan
            @can('Listar Usuarios')
                <a href="{{ route('users') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('users') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black">
                    Alumnos
                </a>
            @endcan
            @can('Ver Respuestas')
                <a href="{{ route('responses.index') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('responses.index') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black">
                    Resultados
                </a>
            @endcan
            @can('Ver Dashboard')
                <a href="{{ route('admin.roles.index') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('admin.roles.index') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black">
                    Roles y Permisos
                </a>
            @endcan
            @can('Editar Usuarios')
                <a href="{{ route('admin.users.index') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('admin.users.index') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black">
                    Usuarios
                </a>
            @endcan
            <a href="{{ route('students.exam') }}"
                class="block py-2.5 px-4 rounded transition duration-200 @routeIs ('students.exam') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black ">
                Examenes
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
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black"
                    href="{{ route('logout') }}" onclick="event.preventDefault();
                 this.closest('form').submit();">
                    Cerrar Sesión
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
