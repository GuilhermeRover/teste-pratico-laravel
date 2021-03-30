<div class="flex justify-between">
{{-- Previous Page Link --}}
@if ($paginator->onFirstPage())
{{-- First Page --}}
<div class="w-32 flex justify-between items-center relative inline-flex px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-400 bg-white dark:text-gray-500 dark:bg-gray-800 dark:border-gray-500">
    <box-icon name='left-arrow-alt' class="fill-current"></box-icon>
    {{__('datatables.pagination-previous')}}
</div>
@else
<button wire:click="previousPage" class="w-32 flex justify-between items-center relative inline-flex px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-900 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:text-white dark:bg-gray-900">
    <box-icon name='left-arrow-alt' class="fill-current"></box-icon>
    {{__('datatables.pagination-previous')}}
</button>
@endif


{{-- Next Page pnk --}}
@if ($paginator->hasMorePages())
<button wire:click="nextPage" class="w-32 flex justify-between items-center relative inline-flex px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-900 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:text-white dark:bg-gray-900">
    {{__('datatables.pagination-next')}}
    <box-icon name='right-arrow-alt' class="fill-current "></box-icon>
</button>
@else
{{-- Last Page --}}
<div class="w-32 flex justify-between items-center relative inline-flex px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-400 bg-white dark:text-gray-500 dark:bg-gray-800 dark:border-gray-500">
    {{__('datatables.pagination-next')}}
    <box-icon name='right-arrow-alt' class="fill-current"></box-icon>
</div>
@endif
</div>
