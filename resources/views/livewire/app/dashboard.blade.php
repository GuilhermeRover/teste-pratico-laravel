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
        <div class="pt-14 w-full h-full border-l">
            <h1 class="text-3xl p-8 text-gray-800 dark:text-white">
                {{__('content.app-dashboard-dashboard')}}

                <div class="flex items-center justify-center ">
                    <button x-data="{}"
                        @click="$dispatch('notice', {type: 'success', text: '🔥 Success!'})"
                        class="m-4 bg-green-500 text-lg font-bold p-6 py-2 text-white shadow-md rounded">
                        Success
                    </button>
                    <button x-data="{}"
                        @click="$dispatch('notice', {type: 'info', text: 'ᕦ(ò_ó)ᕤ'})"
                        class="m-4 bg-blue-500 text-lg font-bold p-6 py-2 text-white shadow-md rounded">
                        Info
                    </button>
                    <button x-data="{}"
                        @click="$dispatch('notice', {type: 'warning', text: '⚡ Warning'})"
                        class="m-4 bg-yellow-500 text-lg font-bold p-6 py-2 text-white shadow-md rounded">
                        Warning
                    </button>
                    <button x-data="{}"
                        x-on:click="$dispatch('notice', {type: 'error', text: '😵 Error!'})"
                        class="m-4 bg-red-500 text-lg font-bold p-6 py-2 text-white shadow-md rounded">
                        Error
                    </button>
                </div>
                
                
                <div
                    x-data="noticesHandler()"
                    class="z-50 flex justify-center"
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
                            class="rounded mb-4 mr-6 w-56 h-16 flex items-center justify-center text-white shadow-lg font-bold text-lg cursor-pointer"
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
                <script>
                    function noticesHandler() {
                        return {
                            notices: [],
                            visible: [],
                            add(notice) {
                                notice.id = Date.now()
                                this.notices.push(notice)
                                this.fire(notice.id)
                            },
                            fire(id) {
                                this.visible.push(this.notices.find(notice => notice.id == id))
                                const timeShown = 2000 * this.visible.length
                                setTimeout(() => {
                                    this.remove(id)
                                }, timeShown)
                            },
                            remove(id) {
                                const notice = this.visible.find(notice => notice.id == id)
                                const index = this.visible.indexOf(notice)
                                this.visible.splice(index, 1)
                            },
                            
                        };
                    }

                </script>
            </h1>
        </div>
    </div>
</div>