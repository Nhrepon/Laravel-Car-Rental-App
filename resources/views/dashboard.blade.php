<x-app-layout>
    <div class="container mx-auto">
        <div class="flex gap-1">
            <div class="w-1/5 ">
                <h3 class="text-center p-2 text-3xl">Dashboard</h3>
                <hr/>
                <ul class="list-none gap-1 h-svh text-1xl" style="max-height: 70vh">
                    <li class="group py-2 my-1 bg-gray-200 hover:bg-green-500 transition-all duration-500" ><a href="{{route('dashboard')}}" class="p-3 text-black group-hover:text-white transition-all duration-500">Home</a></li>
                    <li class="group py-2 my-1 bg-gray-200 hover:bg-green-500 transition-all duration-500" ><a href="{{route('car')}}" class="p-3 text-black group-hover:text-white transition-all duration-500">Car</a></li>
                    
                </ul>
            </div>
            <div class="w-4/5">
                <h3 class="p-2 text-3xl">Content</h3>
                <hr/>

            </div>
        </div>
    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
