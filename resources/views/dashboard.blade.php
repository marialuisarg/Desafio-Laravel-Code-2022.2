<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col md-4">
                    <div class="card bg-white text-white shadow-lg rounded" style="border-style:none;">
                        <img class="card-img" src="{{ asset('img/doces-1.jpg') }}" alt="Card image">
                    </div>
                </div>
                <div class="col md-4">
                    <div class="card bg-dark text-white shadow-lg rounded" style="border-style:none;">
                        <img class="card-img" src="{{ asset('img/doces-2.jpg') }}" alt="Card image">
                    </div>
                </div>
                <div class="col md-4">
                    <div class="card bg-dark text-white shadow-lg rounded" style="border-style:none;">
                        <img class="card-img" src="{{ asset('img/doces-3.jpg') }}" alt="Card image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
