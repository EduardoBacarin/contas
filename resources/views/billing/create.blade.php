<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="max-w-4xl mx-auto">
                        <div class="">
                            <div class="grid grid-cols-2">
                                <x-bladewind::input label="Nome a" class="mr-2"/>
                                <x-bladewind::input label="Nome b" class="ml-2"/>
                            </div>
                            <div class="grid grid-cols-2">
                                <x-bladewind::input label="Nome c" class="mr-2"/>
                                <x-bladewind::input label="Nome d" class="ml-2"/>
                            </div>
                            <div class="grid grid-cols-2">
                                <x-bladewind::input label="Nome e" class="mr-2"/>
                                <x-bladewind::input label="Nome f" class="ml-2"/>
                            </div>
                        </div>
                        <div class="mb-2 float-right">
                            <x-bladewind::button>Salvar</x-bladewind>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</x-app-layout>
