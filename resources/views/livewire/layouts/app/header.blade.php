<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="hidden md:block">
        <div class="flex justify-between bg-white dark:bg-gray-900 w-screen h-14 border-b dark:border-gray-400">
            <div class="flex items-center justify-center">
                <div @click="Sidebar = !Sidebar" class="">
                    <box-icon name='chevrons-right' class="fill-current w-10 h-10 absolute top-2 left-5 text-gray-700 dark:text-white" x-show.transition.duration.400ms="!Sidebar"></box-icon>
                    <box-icon name='chevrons-left' class="fill-current w-10 h-10 absolute top-2 left-5 text-gray-700 dark:text-white" x-show.transition.duration.400ms="Sidebar"></box-icon>
                </div>
                <div class="w-px h-14 absolute left-20 bg-gray-200"></div>
            </div>
            <div class="flex items-center justify-center mr-4">
                <div class="inline-flex items-center justify-center mr-4 text-gray-700 dark:text-white" onclick="change()" @click="dark = !dark">
                    <box-icon name="sun" class="fill-current w-6 h-6" x-show="!dark"></box-icon>
                    <box-icon name="moon" class="fill-current w-6 h-6" x-show="dark"></box-icon>
                </div>
                <div class="mr-14 ml-4 flex items-center cursor-pointer text-gray-800 dark:text-white" @click="IsOpen = !IsOpen">
                    <h1 class="">
                        Eder Guilherme dos Reis Rover
                    </h1>
                    <box-icon name="chevron-down" class="fill-current w-8 h-8 absolute right-10 text-gray-800 dark:text-white" x-show.transition.duration.400ms="!IsOpen"></box-icon>
                    <box-icon name="chevron-up" class="fill-current w-8 h-8 absolute right-10 text-gray-800 dark:text-white" x-show.transition.duration.400ms="IsOpen"></box-icon>
                </div>
            </div>
        </div>
        <div x-show.transition.duration.400ms="IsOpen" @click.away="IsOpen = false" class="hidden md:block w-80 h-44 rounded-md absolute right-12 top-10 border shadow-md bg-white dark:bg-gray-800">
            <h1 class="mt-3 text-xs text-center text-gray-400">
                Configurações
            </h1>
            <a href="{{ url('/perfil') }}" class="flex items-center justify-center pl-2 pt-2 cursor-pointer">
                <box-icon name='user' class="fill-current text-gray-700 dark:text-gray-100"></box-icon>
                <h1 class="text-gray-800 text-base ml-1 dark:text-white">
                    Meu perfil
                </h1>
            </a>
            <a href="{{ url('/configuracoes') }}" class="flex items-center justify-center pl-2 pt-2 cursor-pointer">
                <box-icon name='cog' class="fill-current text-gray-700 dark:text-gray-100"></box-icon>
                <h1 class="text-gray-800 text-base ml-1 dark:text-white">
                    Configurações
                </h1>
            </a>
            <h1 class="dataTime mt-2 text-xs text-center text-gray-400">
                {{-- Timer --}}
            </h1>
            <a href="{{ url('/logout') }}" class="flex items-center justify-center pl-2 mt-2 pt-2 pb-2 cursor-pointer bg-gray-50 dark:bg-gray-900">
                <box-icon type='solid' name='log-out' class="fill-current  dark:text-gray-100"></box-icon>
                <h1 class="text-red-600 text-base font-semibold ">
                    Sair
                </h1>
            </a>
        </div>
    </div>

    {{-- Mobile nav. --}}
    <div>
        <div class="w-screen md:hidden border-b">
            <div class="flex items-center justify-between bg-white dark:bg-gray-900">
                <div class="flex items-center justify-center">
                    <div @click="Sidebar = !Sidebar" class="pl-2 pr-2 flex items-center justify-center">
                        <box-icon name='chevrons-right' class="fill-current w-8 h-8 dark:text-white" x-show="!Sidebar"></box-icon>
                        <box-icon name='chevrons-left' class="fill-current w-8 h-8 dark:text-white" x-show="Sidebar"></box-icon>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                </div>
                <div class="flex items-center justify-center mr-2">
                    <div class="text-gray-800 w-36 flex items-center justify-end">
                        <div class="inline-flex items-center justify-center mr-4 text-gray-700 dark:text-white" onclick="change()" @click="dark = !dark">
                            <box-icon name="sun" class="fill-current w-6 h-6" x-show="!dark"></box-icon>
                            <box-icon name="moon" class="fill-current w-6 h-6" x-show="dark"></box-icon>
                        </div>
                        <div class="mr-6 ml-4 flex items-center cursor-pointer text-gray-800 dark:text-white" @click="IsOpen = !IsOpen">
                            <h1 class="text-base text-gray-800 dark:text-white">
                                Menu
                            </h1>
                            <box-icon name="chevron-down" class="fill-current w-8 h-8 absolute right-0 text-gray-700 dark:text-white" x-show.transition.duration.400ms="!IsOpen"></box-icon>
                            <box-icon name="chevron-up" class="fill-current w-8 h-8 absolute right-0 text-gray-700 dark:text-white" x-show.transition.duration.400ms="IsOpen"></box-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:hidden bg-white border-b dark:bg-gray-900" x-show.transition.duration.400ms="IsOpen" @click.away="IsOpen = false">
            <h1 class="text-xs text-center pt-4 text-gray-400">
                Configurações
            </h1>
            <h1 class="mt-3 text-xs text-center text-gray-700">
                Eder Guilherme dos Reis Rover
            </h1>
            <a href="{{ url('/perfil') }}" class="flex items-center justify-center pl-2 pt-2 cursor-pointer">
                <box-icon name='user' class="fill-current text-gray-700 dark:text-gray-100"></box-icon>
                <h1 class="text-gray-800 text-base ml-1 dark:text-white">
                    Meu perfil
                </h1>
            </a>
            <a href="{{ url('/configuracoes') }}" class="flex items-center justify-center pl-2 pt-2 cursor-pointer">
                <box-icon name='cog' class="fill-current text-gray-700 dark:text-gray-100"></box-icon>
                <h1 class="text-gray-800 text-base ml-1 dark:text-white">
                    Configurações
                </h1>
            </a>
            <h1 class="dataTime mt-2 text-xs text-center text-gray-400">
                {{-- Timer --}}
            </h1>
            <a href="{{ url('/logout') }}" class="flex items-center justify-center pl-2 mt-2 pt-2 pb-2 cursor-pointer bg-gray-50 dark:bg-gray-900">
                <box-icon type='solid' name='log-out' class="fill-current  dark:text-gray-100"></box-icon>
                <h1 class="text-red-600 text-base font-semibold">
                    Sair
                </h1>
            </a>
        </div>
    </div>
</div>
