<div x-data="{IsOpen: false, dark: localStorage.theme === 'dark'}">
    {{-- Success is as dangerous as failure. --}}
    <div class="hidden md:block">
        <div class="flex justify-between bg-white dark:bg-gray-900 w-screen h-14 border-b dark:border-gray-400">
            <div class="flex items-center justify-center">
                <h1 class="text-base text-gray-800 border-b-2 border-blue-400 pb-4 pt-4 ml-20">
                    Dashboard
                </h1>
            </div>
            <div class="flex items-center justify-center mr-4">
                <div class="inline-flex items-center justify-center mr-4 text-gray-700 dark:text-white" onclick="change()" @click="dark = !dark">
                    <box-icon name="sun" class="fill-current w-6 h-6" x-show="!dark"></box-icon>
                    <box-icon name="moon" class="fill-current w-6 h-6" x-show="dark"></box-icon>
                </div>
                <div class="mr-14 ml-4 flex items-center cursor-pointer" @click="IsOpen = !IsOpen">
                    <h1 class="">
                        Eder Guilherme dos Reis Rover
                    </h1>
                    <box-icon name="chevron-down" class="fill-current w-8 h-8 absolute right-10" x-show.transition.duration.400ms="!IsOpen"></box-icon>
                    <box-icon name="chevron-up" class="fill-current w-8 h-8 absolute right-10" x-show.transition.duration.400ms="IsOpen"></box-icon>
                </div>
            </div>
        </div>
        <div x-show.transition.duration.400ms="IsOpen" class="hidden md:block w-80 h-40 rounded-md absolute right-12 top-10 border shadow-md bg-white">
            <h1 class="mt-2 text-xs text-center text-gray-400">
                Configurações
            </h1>
            <a href="{{ url('/perfil') }}" class="flex items-center justify-center pl-2 pt-2 cursor-pointer">
                <box-icon name='user' class="fill-current text-gray-700"></box-icon>
                <h1 class="text-gray-800 text-base ml-1">
                    Meu perfil
                </h1>
            </a>
            <a href="{{ url('/configuracoes') }}" class="flex items-center justify-center pl-2 pt-2 cursor-pointer">
                <box-icon name='cog' class="fill-current text-gray-700"></box-icon>
                <h1 class="text-gray-800 text-base ml-1">
                    Configurações
                </h1>
            </a>
            <h1 class="mt-2 text-xs text-center text-gray-400">
                10/03/2021 16:43
            </h1>
            <a href="{{ url('/logout') }}" class="flex items-center justify-center pl-2 mt-2 pt-2 pb-2 cursor-pointer bg-gray-50">
                <box-icon type='solid' name='log-out'></box-icon>
                <h1 class="text-red-600 text-base font-semibold">
                    Sair
                </h1>
            </a>
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
                    <box-icon name='menu' x-show.transition.duration.400ms="!IsOpen" class="fill-current w-8 h-8 text-xl inline text-gray-700 dark:text-white absolute right-4 top-3"></box-icon>
                    <box-icon name='x' x-show.transition.duration.400ms="IsOpen" class="fill-current w-8 h-8 text-xl inline text-gray-700 dark:text-white absolute right-4 top-3"></box-icon>
                </div>
                <div onclick="change()" @click="dark = !dark">
                    <box-icon name="sun" x-show.transition.duration.400ms="!dark" class="fill-current w-6 h-6 text-xl inline text-gray-700 dark:text-white absolute right-20 top-4"></box-icon>
                    <box-icon name="moon" x-show.transition.duration.400ms="dark" class="fill-current w-6 h-6 text-xl inline text-gray-700 dark:text-white absolute right-20 top-4"></box-icon>
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
