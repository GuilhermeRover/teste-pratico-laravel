<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="absolute z-50 top-14 left-2 border w-40 h-60 shadow-md rounded bg-white dark:bg-gray-900" x-show.transition.duration.400ms="Sidebar" @click.away="Sidebar = false">
        <div class="h-full pt-5 bg-white dark:bg-gray-900">
            <a href="{{ url('dashboard') }}" class="ml-1 mt-2 flex items-center justify-between cursor-pointer">
                <div class="flex items-center justify-center pl-4">
                    <box-icon type="solid" name='home' class="fill-current text-gray-700 dark:text-white"></box-icon>
                    <h1 class="ml-2 text-gray-800 dark:text-white">
                        {{__('content.app-sidebar-dashboard')}}
                    </h1>
                </div>
            </a>
            <a href="{{ url('usuarios') }}" class="ml-1 mt-4 flex items-center justify-between cursor-pointer">
                <div class="flex items-center justify-center pl-4">
                    <box-icon type="solid" name='user' class="fill-current text-gray-700 dark:text-white"></box-icon>
                    <h1 class="ml-2 text-gray-800 dark:text-white">
                        {{__('content.app-sidebar-users')}}
                    </h1>
                </div>
            </a>
            <a href="{{ url('produtos') }}" class="ml-1 mt-4 flex items-center justify-between cursor-pointer">
                <div class="flex items-center justify-center pl-4">
                    <box-icon name='receipt' class="fill-current text-gray-700 dark:text-white"></box-icon>
                    <h1 class="ml-2 text-gray-800 dark:text-white">
                        {{__('content.app-sidebar-products')}}
    
                    </h1>
                </div>
            </a>
        </div>
    </div>
</div>