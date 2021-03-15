{{-- If your happiness depends on money, you will never be happy with yourself. --}}

{{-- Opened --}}
<div class="w-48 h-full pt-20 bg-white dark:bg-gray-900" x-show.transition.duration.400ms="Sidebar" @click.away="Sidebar = false">
    <a href="{{ url('usuarios') }}" class="ml-1 mt-2 flex items-center justify-between cursor-pointer">
        <div class="flex items-center justify-center pl-4">
            <box-icon type="solid" name='user' class="fill-current text-gray-700 dark:text-white"></box-icon>
            <h1 class="ml-2 text-gray-800 dark:text-white">
                Usuários
            </h1>
        </div>
    </a>
    <a href="{{ url('produtos') }}" class="ml-1 mt-4 flex items-center justify-between cursor-pointer">
        <div class="flex items-center justify-center pl-4">
            <box-icon name='receipt' class="fill-current text-gray-700 dark:text-white"></box-icon>
            <h1 class="ml-2 text-gray-800 dark:text-white">
                Produtos
            </h1>
        </div>
    </a>
</div>
{{-- closed --}}
<div class="w-12 md:w-20 h-full pt-20 bg-white dark:bg-gray-900" x-show.transition.duration.400ms="!Sidebar">
    <div class="flex items-center flex-col">
        <a href="{{ url('usuarios') }}" class="ml-1 mt-2 text-lg block cursor-pointer">
            {{-- Users --}}
            <box-icon type="solid" name='user' class="fill-current h-6 w-6 text-gray-700 dark:text-white"></box-icon>
        </a>
        <a href="{{ url('produtos') }}" class="ml-1 mt-2 text-lg block cursor-pointer">
            {{-- Products --}}
            <box-icon name='receipt' class="fill-current h-6 w-6 text-gray-700 dark:text-white"></box-icon>
        </a>
    </div>
</div>
