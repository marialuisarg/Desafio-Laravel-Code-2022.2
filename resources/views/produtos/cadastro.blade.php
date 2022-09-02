<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos / Adicionar produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-table-card>
            <form action="{{route('salvarprodutos')}}" method="POST">
                @csrf
                <div>
                    <x-label for="nome" :value="__('Nome')" />
                    <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
                </div>

                <div class="mt-3">
                    <x-label for="sabor" :value="__('Sabor')" />
                    <x-input id="sabor" class="block mt-1 w-full" type="text" name="sabor" :value="old('sabor')" required autofocus />
                </div>

                <div class="mt-3">
                    <x-label for="preco" :value="__('Preço')" />
                    <x-input id="preco" class="block mt-1 w-full" type="text" name="preco" placeholder="00.00" pattern="[0-9]{2}.[0-9]{2}" :value="old('preco')" required autofocus />
                </div>
                
                <div class="mt-3">
                    <x-label for="descricao" :value="__('Descrição')" />
                    <x-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required autofocus />
                </div>
        
                <x-button-brown class="mt-4">
                    {{ __('Salvar') }}
                </x-button-brown>
            </form>
        </x-table-card>
    </div>

</x-app-layout>