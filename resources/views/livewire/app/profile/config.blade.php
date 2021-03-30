<div>
    {{-- Do your work, then step back. --}}
    <div class="absolute z-10">
        @livewire('layouts.app.header')
    </div>

    <div class="w-screen h-screen dark:bg-gray-900 flex">
        {{-- Sidebar --}}
        <div>
            @livewire('layouts.app.sidebar')
        </div>

        <div class="pt-14 w-full h-full">
            <h1 class="text-3xl p-8 text-gray-800 dark:text-white">
                Configurações
            </h1>
        </div>
    </div>
</div>