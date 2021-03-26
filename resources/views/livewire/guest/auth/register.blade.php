<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="absolute z-10">
        @livewire('layouts.guest.header')
    </div>

    {{-- Toast --}}
    <div class="flex items-center justify-center">
        <div
            x-data="noticesHandler()"
            class="absolute top-32 flex items-center justify-center"
            @notice.window="add($event.detail)"
            style="pointer-events:none">
            
            <template x-for="notice of notices" :key="notice.id">
                <div
                    x-show="visible.includes(notice)"
                    x-transition:enter="transition ease-in duration-200"
                    x-transition:enter-start="transform opacity-0 translate-y-2"
                    x-transition:enter-end="transform opacity-100"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="transform translate-x-0 opacity-100"
                    x-transition:leave-end="transform translate-x-full opacity-0"
                    @click="remove(notice.id)"
                    class="rounded mb-4 mr-6 w-60 h-16 p-2 flex items-center justify-center text-white shadow-lg font-bold text-lg cursor-pointer"
                    :class="{
                        'bg-green-500': notice.type === 'success',
                        'bg-blue-500': notice.type === 'info',
                        'bg-yellow-500': notice.type === 'warning',
                        'bg-red-500': notice.type === 'error',
                        }"
                    style="pointer-events:all"
                    x-text="notice.text">
                </div> 
                {{-- Spinner --}}
                <box-icon name='loader-circle' class="fill-current animate-spin-slow h-10 w-10 text-blue-600"></box-icon>
            </template>
            
        </div>
    </div>

    <div class="w-screen h-screen dark:bg-gray-900">
        <div class="h-full flex items-center justify-center p-2">
            <form method="post" wire:submit.prevent="create" class="w-full md:w-6/12 lg:w-5/12 xl:w-4/12 rounded-lg shadow-md border p-6" @user-registered.window="document.getElementById('name').value = null, document.getElementById('email').value = null, document.getElementById('password').value = null, $dispatch('notice', {type: 'success', text: '🔥 Cadastrado com sucesso!'}), redirectThis()">
                <h2 class="mb-8 text-3xl text-center text-gray-700 dark:text-white">{{__('content.guest-register-register')}}</h2>
                <div class="relative border-b-2 mb-8">
                    <input wire:model="name" type="text" name="name" id="name" placeholder=" " autocomplete="off" autofocus class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="name" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-register-name')}}
                    </label>
                </div>
                <div class="relative border-b-2 mb-8">
                    <input wire:model="email" type="text" name="email" id="email" placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="email" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-register-email')}}
                    </label>
                </div>
                <div class="relative border-b-2 mb-4">
                    <input wire:model="password" type="password" id="password" name="password" placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="password" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-register-password')}}
                    </label>
                </div>
                <button type="submit" class="w-full text-xl p-2 text-gray-900 bg-blue-500 ring-blue-300 ring-2 transition duration-150 hover:bg-blue-400 hover:text-gray-800 dark:bg-blue-900 dark:ring-blue-400 dark:text-gray-100">
                    {{__('content.guest-register-register')}}
                </button>
            </form>
        </div>
    </div>
    
</div>
