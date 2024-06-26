<x-layout>
    <x-slot name="title">
        Panel de gestió
    </x-slot>
    <div class="relative py-16">  
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto  bg-white md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl shadow-xl">
                    <div class="p-6 sm:p-16">
                        <div class="text-center">
                        
                            <h2 class=" text-2xl font-sans font-bold justify-center ">Panel de gestió inmobiliaria<br></h2>
                        </div>
                    <div class="mt-16 grid space-y-4">
                        <a href="{{ route('pisos.index') }}" class="block">
                            <button class="group h-12 px-10 border-2 border-gray-300 rounded-full transition duration-300 hover:border-green-400 w-full">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-green-600 sm:text-base">Pisos</span>
                                </div>
                            </button>
                        </a>
                        <a href="{{ route('clients.index') }}" class="block">
                            <button class="group h-12 px-10 border-2 border-gray-300 rounded-full transition duration-300 hover:border-green-400 w-full">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-green-600 sm:text-base">Clients</span>
                                </div>
                            </button>
                        </a>
                        <a href="{{ route('reservas.index') }}" class="block">
                            <button class="group h-12 px-10 border-2 border-gray-300 rounded-full transition duration-300 hover:border-green-400 w-full">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-green-600 sm:text-base">Reserves</span>
                                </div>
                            </button>
                        </a>

                        <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                        <p class="text-xs">© 2024 Amanda López. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>