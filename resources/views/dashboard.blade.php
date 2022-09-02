<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="row mx-auto text-center mb-5 mt-4">
            <h1>Olá, {{Auth::user()->name}}! Bem-vindo(a) ao BomBom da Lu!</h1>
        </div>
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "card-group">
                <div class="card bg-black text-white shadow-lg rounded text-center m-3" style="border-style:none;">
                    <img class="card-img" src="{{ asset('img/doces-1-dark.jpg') }}" alt="Card image">
                    <div class="card-img-overlay d-flex text-center">
                        <a href="{{ route('estoque.index') }}" class="card-text align-items-center d-flex mx-auto">ESTOQUE</a>
                    </div>
                </div>

                <div class="card bg-black text-white shadow-lg rounded text-center m-3" style="border-style:none;">
                    <img class="card-img" src="{{ asset('img/doces-2-dark.jpg') }}" alt="Card image">
                    <div class="card-img-overlay d-flex text-center">
                        <a href="{{ route('produtos.index') }}" class="card-text align-items-center d-flex mx-auto">PRODUTOS</a>
                    </div>
                </div>

                <div class="card bg-black text-white shadow-lg rounded text-center m-3 my-auto" style="border-style:none;">
                    <img class="card-img" src="{{ asset('img/doces-3-dark.jpg') }}" alt="Card image">
                    <div class="card-img-overlay d-flex text-center">
                        <a href="{{ route('produtos.index') }}" class="card-text align-items-center d-flex mx-auto">PROMOÇÃO DO MÊS</a>
                    </div>
                </div>
            </div>
                
                
        </div>
    </div>
</x-app-layout>
