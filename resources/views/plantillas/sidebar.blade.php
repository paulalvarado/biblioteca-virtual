{{-- Sidebar --}}
<div class="fixed inset-x-0 w-20 bg-orange-500 h-screen p-3 flex flex-col">
    <div class="perfil h-15">
        <img src="{{ asset('img/perfil.png') }}" alt="Perfil" class="rounded-full w-15 h-15 mx-auto">
    </div>
    <div class="w-full grow flex justify-center items-center">
        <ul>
            <li><a href="#" class="p-3 rounded-full bg-white hover:bg-orange-400 hover:text-white duration-150 flex aspect-square my-2 hover:drop-shadow-xl justify-center items-center text-xl"><i class="fa-light fa-grid-2"></i></a></li>
            <li><a href="#" class="p-3 rounded-full bg-white hover:bg-orange-400 hover:text-white duration-150 flex aspect-square my-2 hover:drop-shadow-xl justify-center items-center text-xl"><i class="fa-light fa-heart"></i></a></li>
            <li><a href="#" class="p-3 rounded-full bg-white hover:bg-orange-400 hover:text-white duration-150 flex aspect-square my-2 hover:drop-shadow-xl justify-center items-center text-xl"><i class="fa-light fa-sliders"></i></a></li>
        </ul>
    </div>
    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
    </button>
</div>
