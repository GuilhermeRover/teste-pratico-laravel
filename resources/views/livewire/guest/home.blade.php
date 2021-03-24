<div>
    {{-- In work, do what you enjoy. --}}
    <div class="absolute z-10">
        @livewire('layouts.guest.header')
    </div>
    
    <div class="w-screen h-screen dark:bg-gray-800">
        <div class="pt-20 h-full w-full">
            <h1 class="text-center text-gray-500 dark:text-gray-100 text-5xl mt-60">
                {{__('content.guest-home-title')}}
            </h1>
            <h1 class="text-center text-gray-500 dark:text-gray-100 text-lg mt-2">
                {{__('content.guest-home-subtitle')}}
            </h1>
        </div>
    </div>
</div>
