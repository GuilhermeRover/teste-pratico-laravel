<div x-data="{IsOpen: false, Sidebar: false, dark: localStorage.theme === 'dark'}">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="absolute z-10">
        @livewire('layouts.app.header')
    </div>

    <div class="w-screen h-screen dark:bg-gray-900 flex">
        {{-- Sidebar --}}
        <div>
            @livewire('layouts.app.sidebar')
        </div>
        <div class="pt-14 w-full h-full border-l">
<<<<<<< HEAD
            <h1 class="text-3xl p-8 text-gray-800 dark:text-white">
=======
            <h1 class="text-3xl p-8 text-gray-800">
>>>>>>> 4105fddd429198f3a06b11bdf49215979fb1b601
                Dashboard
            </h1>
        </div>
    </div>
</div>