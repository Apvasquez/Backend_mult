<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight mt-16">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" border-2 m-2 border-black sm:rounded-lg">
                <x-devs>
                </x-devs>
            </div>
        </div>
    </div>
</x-app-layout>
