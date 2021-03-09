<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="absolute z-10">
        @livewire('layouts.guest.header')
    </div>
    
    <div class="w-screen h-screen dark:bg-gray-900">
        <div class="h-full w-full flex items-center justify-center">
            <div class="md:border md:rounded-md md:ring-1 md:ring-blue-200 md:-mt-10 md:p-10 dark:ring-blue-900">
                <form action="/login" method="post" class="">
                    <div>
                        <h1 class="text-4xl text-center text-gray-600 mb-6 dark:text-gray-100">Login</h1>
                    </div>
                    <div>
                        <label for="email" class="ml-1 text-gray-700 text-base block transition duration-150 dark:text-gray-100">
                            Email
                        </label>
                        <input type="email" name="email" id="email" required="" class="w-96 focus:outline-none border-gray-300 border-t-0 border-l-0 border-r-0 text-lg p-1 text-gray-800 transition duration-150 ease-in-out dark:text-gray-100 dark:bg-gray-900">
                    </div>
                    <div class="mt-4">
                        <label for="email" class="ml-1 text-gray-700 text-base block transition duration-150 dark:text-gray-100">
                            Senha
                        </label>
                        <input type="password" name="password" id="password" required="" class="w-96 focus:outline-none border-gray-300 border-t-0 border-l-0 border-r-0 text-lg p-1 text-gray-800 transition duration-150 ease-in-out dark:text-gray-100 dark:bg-gray-900">
                    </div>
                    <div class="mb-4 mt-2">
                        <a href="" class="underline text-blue-600 transition duration-150 hover:text-blue-400 dark:text-blue-400">
                            Esqueceu a senha?
                        </a>
                    </div>
                    <button type="submit" class="w-full text-xl p-2 text-gray-900 bg-blue-500 ring-blue-300 ring-2 transition duration-150 hover:bg-blue-400 hover:text-gray-800 dark:bg-blue-900 dark:ring-blue-400 dark:text-gray-100">
                        Entrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
