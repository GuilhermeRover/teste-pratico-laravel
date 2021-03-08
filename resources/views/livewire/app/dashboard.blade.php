<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="absolute z-10">
        @livewire('layouts.app.header')
    </div>
    
    
    <div class="w-screen h-screen dark:bg-gray-900 flex">
        {{-- Sidebar --}}
        <div>
            @livewire('layouts.app.sidebar')
        </div>
        <div class="pt-20 w-full h-full border-l">
            @livewire('layouts.app.namepage')
            
        </div>
    </div>
</div>
