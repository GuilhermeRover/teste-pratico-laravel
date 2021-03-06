<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}    
    <div>
        <div class="absolute z-10">
            @livewire('layouts.app.header')
        </div>
    
        <div class="w-screen h-screen dark:bg-gray-900 flex">
            
            {{-- Sidebar --}}
            <div>
                @livewire('layouts.app.sidebar')
            </div>

            <div class="pt-14 w-full h-full">
                <div class="inline-block rounded-md p-1 m-4 bg-gray-100 hover:bg-gray-300 dark:bg-gray-800 dark:hover:bg-gray-600">
                    <div class="flex items-center" @click="modal = true">
                        <h1 class="mr-2 text-2xl cursor-pointer text-gray-800 dark:text-white">
                            {{__('content.app-users-add')}}
                        </h1>
                        <box-icon name='user-plus' class="fill-current text-gray-800 dark:text-white"></box-icon>
                    </div>
                </div>

                {{-- Modal --}}
                <div>
                    <div x-show.transition.duration.200ms="modal" class="absolute top-0 left-0 flex items-center justify-center z-50 w-screen h-screen bg-black bg-opacity-75" @user-created.window="document.getElementById('name').value = null, document.getElementById('email').value = null, document.getElementById('password').value = null, modal = false, $dispatch('notice', {type: 'success', text: '🔥 Usuário criado com sucesso!'})">
                        <div class="w-full h-full">
                            <div class="h-full flex items-center justify-center p-2">
                                
                                {{-- Form --}}
                                <form method="post" wire:submit.prevent="create"  @click.away="document.getElementById('name').value = '', document.getElementById('email').value = '', document.getElementById('password').value = '', modal = false" class="w-full md:w-6/12 lg:w-5/12 xl:w-4/12 rounded-lg shadow-md border p-6 bg-white dark:bg-gray-900">
                                    @csrf
                                    {{-- X modal button --}}                
                                    <box-icon name='x'  @click="document.getElementById('name').value = null, document.getElementById('email').value = null, document.getElementById('password').value = null, modal = false" class="fill-current text-gray-800 float-right cursor-pointer dark:text-white"></box-icon>
                                    
                                    <h2 class="mb-10 mt-4 text-2xl text-center text-gray-700 dark:text-white">
                                        {{__('content.app-users-add')}}
                                    </h2>
                                    <div class="relative border-b-2 mb-8">
                                        <input wire:model="name" type="text" required id="name" name="name" placeholder=" " autocomplete="off" autofocus class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                                        <label for="name" class="block absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                                            {{__('content.app-users-name')}}
                                        </label>
                                    </div>
                                    <div class="relative border-b-2 mb-8">
                                        <input wire:model="email" type="email" required id="email" name="email" placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                                        <label for="email" class="block absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                                            {{__('content.app-users-email')}}
                                        </label>
                                    </div>
                                    <div class="relative border-b-2 mb-8">
                                        <input wire:model="password" type="password" required id="password" name="password" placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                                        <label for="password" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                                            {{__('content.app-users-password')}}
                                        </label>
                                    </div>
                                     @isset($submit)
                                         Oi
                                     @endisset
                                    @error('name')
                                        <h1 class="inline text-base rounded-lg text-red-500 bg-red-100">
                                            {{ $message }}
                                        </h1>
                                        <br>
                                    @enderror
                                    @error('email')
                                        <h1 class="inline text-base rounded-lg text-red-500 bg-red-100">
                                            {{ $message }}
                                        </h1>
                                        <br>
                                    @enderror
                                    @error('password')
                                        <h1 class="inline text-base rounded-lg text-red-500 bg-red-100">
                                            {{ $message }}
                                        </h1>
                                        <br>
                                    @enderror
                                    <button type="submit" class="w-full text-xl p-2 mb-4 text-gray-900 bg-blue-500 ring-blue-300 ring-2 transition duration-150 hover:bg-blue-400 hover:text-gray-800 dark:bg-blue-900 dark:ring-blue-400 dark:text-gray-100">
                                        {{__('content.app-users-save')}}
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div
                    x-data="noticesHandler()"
                    class="absolute top-16 right-10 z-50 flex justify-center"
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
                    </template>
                </div>
                
                <div class="">
                    <livewire:app.table.user/>
                </div>
                
            </div>
        </div>
    </div>


</div>
