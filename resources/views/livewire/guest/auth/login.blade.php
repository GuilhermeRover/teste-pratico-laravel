<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="absolute z-10">
        @livewire('layouts.guest.header')
    </div>
<<<<<<< HEAD

    <div class="w-screen h-screen dark:bg-gray-900">
        <div class="h-full flex items-center justify-center p-2">
            <form action="/login" method="post" class="w-full md:w-6/12 lg:w-5/12 xl:w-4/12 rounded-lg shadow-md border p-6">
                <h2 class="mb-8 text-3xl text-center text-gray-700 dark:text-white">Login</h2>
                <div class="relative border-b-2 mb-8">
                    <input type="text" name="email" placeholder=" " autocomplete="off" autofocus class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="email" class="block absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        Email
                    </label>
                </div>
                <div class="relative border-b-2 mb-4">
                    <input type="password" name="password" placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="password" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        Password
                    </label>
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
=======
    
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
>>>>>>> 4105fddd429198f3a06b11bdf49215979fb1b601
        </div>
    </div>
</div>
