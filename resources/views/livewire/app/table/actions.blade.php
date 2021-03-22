<div>
    {{-- Do your work, then step back. --}}
    <div class="flex space-x-1 justify-around">
        <box-icon wire:click="delete({{ $id }})" type='solid' name='trash' class="fill-current rounded cursor-pointer text-red-500 hover:text-red-800"></box-icon>
    </div>
</div>
