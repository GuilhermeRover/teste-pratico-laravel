<div x-data="{IsOpen: false, dark: localStorage.theme === 'dark'}">
    {{-- Success is as dangerous as failure. 
        
                    <!-- Authentication Links -->

                    <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.png')}}"> English</a>
                    <a class="dropdown-item" href="lang/bn"><img src="{{asset('img/bn.png')}}"> Bengali</a>
                    <a class="dropdown-item" href="lang/pt_BR"><img src="{{asset('img/pt_BR.png')}}"> Brasil</a>
        --}}
    <div class="hidden md:block">
        <div class="flex justify-between bg-white dark:bg-gray-900 w-screen h-20 border-b dark:border-gray-400">
            <div class="flex items-center justify-center">
                <a href="{{ url('/') }}" class="p-2 ml-4 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                    {{__('content.guest-header-home')}}
                </a>
            </div>
            <div class="flex items-center justify-center mr-4">
                {{-- language config --}}
                <div>
                    <div @click="IsOpen = !IsOpen" class="inline-flex items-center justify-center mr-4 cursor-pointer text-gray-700 dark:text-white">
                        @php $locale = session()->get('locale'); /* dd($locale); */ @endphp
                        @switch($locale)
                            @case("en")
                                <div class="flex items-center justify-center">
                                    <h1 class="mr-2">English</h1>
                                    <img src="{{ asset('images/United_States.svg') }}" alt="English" class="rounded-lg h-6">
                                </div>
                            @break
                            @case('pt_BR')
                                <div class="flex items-center justify-center">
                                    <h1 class="mr-2">Português Brasileiro</h1>
                                    <img src="{{ asset('images/Brazil.svg') }}" alt="Brasil" class="rounded-lg h-6">
                                </div>
                            @break
                            @case('es')
                                <div class="flex items-center justify-center">
                                    <h1 class="mr-2">Español</h1>
                                    <img src="{{ asset('images/Spain.svg') }}" alt="Español" class="rounded-lg h-6">
                                </div>
                            @break
                            @case('de')
                                <div class="flex items-center justify-center">
                                    <h1 class="mr-2">Deutsche</h1>
                                    <img src="{{ asset('images/Germany.svg') }}" alt="Deutsche" class="rounded-lg h-6">
                                </div>
                            @break
                            @case('fr')
                                <div class="flex items-center justify-center">
                                    <h1 class="mr-2">Français</h1>
                                    <img src="{{ asset('images/France.svg') }}" alt="Français" class="rounded-lg h-6">
                                </div>
                            @break
                            @default
                                <div class="flex items-center justify-center">
                                    <h1 class="mr-2">Português Brasileiro</h1>
                                    <img src="{{ asset('images/Brazil.svg') }}" alt="Brasil" class="rounded-lg h-6">
                                </div>
                        @endswitch
                                               
                        <box-icon name="chevron-down" class="fill-current w-6 h-6 text-gray-800 dark:text-white" x-show="!IsOpen"></box-icon>
                        <box-icon name="chevron-up" class="fill-current w-6 h-6 text-gray-800 dark:text-white" x-show="IsOpen"></box-icon>
                    </div>
                    <div x-show="IsOpen" @click.away="IsOpen = false" class="absolute flex items-center justify-center h-60 w-60 right-64 shadow-md rounded-md border bg-white dark:bg-gray-900">
                        <ul>
                            <li class="p-2 flex items-center justify-center">
                                <a href="lang/pt_BR" class="block mr-2 text-gray-800 dark:text-white">Português Brasileiro</a>
                                <img src="{{ asset('images/Brazil.svg') }}" alt="Brasil" class="rounded-lg h-6">
                            </li>
                            <li class="p-2 flex items-center justify-center">
                                <a href="lang/en" class="block mr-2 text-gray-800 dark:text-white">English</a>
                                <img src="{{ asset('images/United_States.svg') }}" alt="English" class="rounded-lg h-6">
                            </li>
                            <li class="p-2 flex items-center justify-center">
                                <a href="lang/es" class="block mr-2 text-gray-800 dark:text-white">Español</a>
                                <img src="{{ asset('images/Spain.svg') }}" alt="Español" class="rounded-lg h-6">
                            </li>
                            <li class="p-2 flex items-center justify-center">
                                <a href="lang/de" class="block mr-2 text-gray-800 dark:text-white">Deutsche</a>
                                <img src="{{ asset('images/Germany.svg') }}" alt="Deutsche" class="rounded-lg h-6">
                            </li>
                            <li class="p-2 flex items-center justify-center">
                                <a href="lang/fr" class="block mr-2 text-gray-800 dark:text-white">Français</a>
                                <img src="{{ asset('images/France.svg') }}" alt="Français" class="rounded-lg h-6">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="inline-flex items-center justify-center mr-4 cursor-pointer text-gray-700 dark:text-white" onclick="change()" @click="dark = !dark">
                    <box-icon name="sun" class="fill-current w-6 h-6" x-show="!dark"></box-icon>
                    <box-icon name="moon" class="fill-current w-6 h-6" x-show="dark"></box-icon>
                </div>
                @auth  
                    <a href="{{ url('dashboard') }}" class="mr-4 p-2 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 bg-transparent transition duration-150 hover:bg-gray-700 hover:text-white">
                        {{__('content.guest-header-dashboard')}}
                    </a>     
                @else
                    <a href="{{ url('login') }}" class="mr-4 p-2 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                        {{__('content.guest-header-login')}}
                    </a>
                    <a href="{{ url('cadastrar') }}" class=" mr-4 p-2 rounded-md cursor-pointer text-gray-700 dark:text-gray-100 transition duration-150 hover:bg-gray-700 hover:text-white">
                        {{__('content.guest-header-register')}}
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
                    {{__('content.guest-header-home')}}
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
                            {{__('content.guest-header-dashboard')}}
                        </a>     
                    @else
                        <a href="{{ url('/login') }}" class="text-xl block text-gray-700 dark:text-white p-3">
                            {{__('content.guest-header-login')}}
                        </a>
                        <a href="{{ url('/cadastrar') }}" class="text-xl block text-gray-700 dark:text-white p-3">
                            {{__('content.guest-header-register')}}
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
