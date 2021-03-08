<div x-data="{IsOpen: false, dark: localStorage.theme === 'dark'}">
    {{-- Success is as dangerous as failure. --}}
    <div class="hidden md:block">
        <div class="flex justify-between bg-white dark:bg-gray-900 w-screen h-20 border-b dark:border-gray-400">
            <div class="flex items-center justify-center">
                <a href="{{ url('/') }}" class="p-2 ml-4 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                    Home
                </a>
            </div>
            <div class="flex items-center justify-center mr-4">
                <div class="inline-flex items-center justify-center mr-4 text-gray-700 dark:text-white" onclick="change()" @click="dark = !dark">
                    <box-icon name="sun" class="fill-current w-6 h-6" x-show="!dark"></box-icon>
                    <box-icon name="moon" class="fill-current w-6 h-6 " x-show="dark"></box-icon>
                </div>
                @auth  
                    <a href="{{ url('dashboard') }}" class="mr-4 p-2 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 bg-transparent transition duration-150 hover:bg-gray-700 hover:text-white">
                        Dashboard
                    </a>     
                @else
                    <a href="{{ url('login') }}" class="mr-4 p-2 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                        Login
                    </a>
                    <a href="{{ url('cadastrar') }}" class=" mr-4 p-2 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                        Cadastrar
                    </a>
                @endauth
            </div>
        </div>
    </div>
    {{-- Mobile nav. --}}
    <div class="w-screen border-b md:hidden">
        <div class="h-full w-full bg-gray-100 dark:bg-gray-900">
            <div class="block">
                <a href="{{ url('/') }}" class="text-xl inline-block text-gray-700 dark:text-white p-3">
                    Home
                </a>
                <div @click="IsOpen = !IsOpen">
                    <div x-show.transition.duration.400ms="!IsOpen" class="text-xl inline text-gray-700 dark:text-white absolute right-4 top-3">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div x-show.transition.duration.400ms="IsOpen" class="text-xl inline text-gray-700 dark:text-white absolute right-4 top-3">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div onclick="change()" @click="dark = !dark">
                    <div x-show.transition.duration.400ms="!dark" class="text-xl inline text-gray-700 dark:text-white absolute right-20 top-3">
                        <i class="far fa-sun"></i>
                    </div>
                    <div x-show.transition.duration.400ms="dark" class="text-xl inline text-gray-700 dark:text-white absolute right-20 top-3">
                        <i class="far fa-moon"></i>
                    </div>
                </div>
                <div x-show.transition.duration.200ms="IsOpen" class="mt-10">
                    @auth  
                        <a href="{{ url('/dashboard') }}" class="text-xl block text-gray-700 dark:text-white p-3">
                            Dashboard
                        </a>     
                    @else
                        <a href="{{ url('/login') }}" class="text-xl block text-gray-700 dark:text-white p-3">
                            Login
                        </a>
                        <a href="{{ url('/cadastrar') }}" class="text-xl block text-gray-700 dark:text-white p-3">
                            Cadastrar
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
