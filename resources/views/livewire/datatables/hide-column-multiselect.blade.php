<div x-data="{ show: false }" class="flex flex-col items-center">
    <div class="flex flex-col items-center relative">
        <button x-on:click="show = !show" class="px-3 py-2 border rounded-md text-xs leading-4 font-medium uppercase tracking-wider focus:outline-none border-blue-400 bg-white text-blue-500 hover:bg-blue-200 dark:bg-transparent dark:text-blue-400 dark:border-blue-400 dark:hover:bg-blue-900">
            <div class="flex items-center h-5">
                {{__('datatables.hideable-buttom')}}
            </div>
        </button>
        <div x-show="show" x-on:click.away="show = false" class="z-50 absolute shadow-2xl w-full top-10 bg-white rounded-md max-h-select overflow-y-auto" x-cloak>
            <div class="flex flex-col w-full">
                @foreach($this->columns as $index => $column)
                <div>
                    <div class="@unless($column['hidden']) hidden @endif cursor-pointer w-full border-gray-800 border-b bg-gray-700 text-gray-500 hover:bg-blue-600 hover:text-white" wire:click="toggle({{$index}})">
                        <div class="relative flex w-full items-center p-2 group">
                            <div class=" w-full items-center flex">
                                <div class="mx-2 leading-6">{{ $column['label'] }}</div>
                            </div>
                            <div class="absolute inset-y-0 right-0 pr-2 flex items-center">
                                <x-icons.check-circle class="h-3 w-3 stroke-current text-gray-700" />
                            </div>
                        </div>
                    </div>
                    <div class="@if($column['hidden']) hidden @endif cursor-pointer w-full border-gray-800 border-b bg-gray-700 text-white hover:bg-red-900" wire:click="toggle({{$index}})">
                        <div class="relative flex w-full items-center p-2 group">
                            <div class=" w-full items-center flex">
                                <div class="mx-2 leading-6">{{ $column['label'] }}</div>
                            </div>
                            <div class="absolute inset-y-0 right-0 pr-2 flex items-center">
                                <box-icon name='x-circle' class="fill-current stroke-current text-gray-500"></box-icon>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>