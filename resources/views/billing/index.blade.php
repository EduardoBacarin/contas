<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-1 float-right">
                        <x-bladewind::button>Subscribe Now</x-bladewind::button>
                    </div>
                    <x-bladewind::table>
                        <x-slot name="header">
                            <th>Name</th>
                            <th>Department</th>
                            <th>Email</th>
                        </x-slot>
                        <tr>
                            <td>Alfred Rowe</td>
                            <td>Outsourcing</td>
                            <td>alfred@therowe.com</td>
                        </tr>
                        <tr>
                            <td>Michael K. Ocansey</td>
                            <td>Tech</td>
                            <td>kabutey@gmail.com</td>
                        </tr>
                    </x-bladewind::table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
