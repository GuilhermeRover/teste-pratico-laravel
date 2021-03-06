<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="absolute z-10">
        @livewire('layouts.guest.header')
    </div>


    <div class="w-screen h-screen dark:bg-gray-900">
        <div class="h-full flex items-center justify-center p-2">
            <form method="post" wire:submit.prevent="authenticate" class="w-full md:w-6/12 lg:w-5/12 xl:w-4/12 rounded-lg shadow-md border p-6">
                @csrf
                <h2 class="mb-8 text-3xl text-center text-gray-700 dark:text-white">{{__('content.guest-login-login')}}</h2>
                <div class="relative border-b-2 mb-8">
                    <input type="text" name="email" wire:model.defer='email' placeholder=" " autocomplete="off" autofocus class="@error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red dark:border-red-300 dark:text-red-500 dark:placeholder-red-300 dark:focus:border-red-300 dark:focus:shadow-outline-red @enderror block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="email" class="block absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-login-email')}}
                    </label>
                </div>
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <div class="relative border-b-2 mb-4">
                    <input type="password" name="password" wire:model.defer='password' placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="password" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-login-password')}}
                    </label>
                </div>
                <div class="mb-4 mt-2">
                    <a href="" class="underline text-blue-600 transition duration-150 hover:text-blue-400 dark:text-blue-400">
                        {{__('content.guest-login-forgot')}}
                    </a>
                </div>
                <button type="submit" class="w-full text-xl p-2 text-gray-900 bg-blue-500 ring-blue-300 ring-2 transition duration-150 hover:bg-blue-400 hover:text-gray-800 dark:bg-blue-900 dark:ring-blue-400 dark:text-gray-100">
                    {{__('content.guest-login-login')}}
                </button>
            </form>
        </div>
        @error('email')
           {{ $message }}
        @enderror
        @error('password')
           {{ $message }}
        @enderror
    </div>
</div>
