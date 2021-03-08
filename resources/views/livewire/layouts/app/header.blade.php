<div x-data="{IsOpen: false, dark: false}">
    {{-- Success is as dangerous as failure. --}}
    <div class="hidden md:block">
        <div class="flex justify-between bg-white dark:bg-gray-900 w-screen h-20 border-b dark:border-gray-400">
            <div class="mt-5 ml-10 p-2">
                <a href="{{ url('/') }}" class="p-2 rounded-md underline cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                    Home
                </a>
            </div>
            <div class="mr-10 mt-5 p-2">
                <div class="inline-block mr-4" onclick="change()" @click="dark = !dark">
                    <div x-show="!dark" class="text-xl inline text-gray-700 dark:text-white">
                        <i class="far fa-sun"></i>
                    </div>
                    <div x-show="dark" class="text-xl inline text-gray-700 dark:text-white">
                        <i class="far fa-moon"></i>
                    </div>
                </div>
                @auth  
                    <a href="{{ url('dashboard') }}" class="mr-4 p-2 rounded-md underline cursor-pointer text-gray-700 dark:text-gray-100 bg-transparent transition duration-150 hover:bg-gray-700 hover:text-white">
                        Dashboard
                    </a>     
                @else
                    <a href="{{ url('login') }}" class="mr-4 p-2 rounded-md underline cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                        Login
                    </a>
                    <a href="{{ url('cadastrar') }}" class="mt-5 p-2 rounded-md underline cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
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
