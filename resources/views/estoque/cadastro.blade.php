<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estoque / Adicionar produto ao estoque') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-table-card>
            <form action="{{route('salvarestoque')}}" method="POST">
                @csrf
                <div>
                    <x-label for="produto" :value="__('Produto')" />
                    <select class="form-select" aria-label="Selecionar Produto">
                        @foreach ($products as $product)
                            <option value="{{$product->id}}">{{$product->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <x-label for="quantidade" :value="__('Quantidade')" />
                    <x-input id="quantidade" class="block mt-1 w-full" type="number" name="quantidade" :value="old('quantidade')" required autofocus />
                </div>

                <div class="mt-3">
                    <x-label for="data" :value="__('Data')" />
                    <x-input id="data" class="block mt-1 w-full" type="data" name="data" placeholder="00.00" pattern="[0-9]{2}.[0-9]{2}" :value="old('data')" required />
                </div>
        
                <x-button-brown class="mt-4">
                    {{ __('Salvar') }}
                </x-button-brown>
            </form>
        </x-table-card>
    </div>

</x-app-layout>