<div>
    {{-- The best athlete wants his opponent at his best. --}}
<div class="absolute z-10">
        @livewire('layouts.app.header')
    </div>

    <div class="w-screen h-screen dark:bg-gray-900 flex">
        {{-- Sidebar --}}
        <div>
            @livewire('layouts.app.sidebar')
        </div>

        <div class="pt-14 w-full h-full">
            <h1 class="pl-10 md:pl-32 p-4 text-2xl bg-gray-50">
                Perfil
            </h1>
            <div class="md:pl-20 md:pr-20 md:pt-10 md:flex md:justify-around">
                <div class="mt-4 w-full p-4 md:w-1/3">
                    <div class="text-xl text-gray-900">
                        Informações do usuário
                    </div>
                    <div class="text-base text-gray-700">
                        Aqui você pode atualizar as informações da sua conta
                    </div>
                </div>
                <div class="mt-4 p-4 border rounded-md md:pl-6 md:flex-1 bg-white">
                    <form class="">
                        <div class="mb-6">
                            <label for="" class="">
                                Nome
                            </label>
                            <input type="text" class="w-full mt-1 rounded">
                        </div>
                        <div class="block">
                            <label for="" class="">
                                Email
                            </label>
                            <input type="email" class="w-full mt-1 rounded">
                        </div>
                        <button type="submit" class="mt-4 p-2 border rounded-md bg-gray-800 text-white hover:bg-gray-700">
                            Atualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>