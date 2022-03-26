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


        <a href="#" class="text-white flex items-center space-x-2 px-4">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            <span class="text-2xl font-extrabold">Logo</span>
        </a>

        <nav class="pt-10">
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black">
                Home
            </a>
            <a href="{{route('exams.index')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black">
                Examenes
            </a>
            <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black">
                Examenes para resolver
            </a>
            <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:font-bold hover:text-black">
                Pricing
            </a>
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
