<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estoque') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-table-card>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->nome}}</td>
                            <td>R$ {{$product->preco}}</td>
                        </tr>
                    @endforeach
                    <tr>
                </tbody>
            </table>
        </x-table-card>
    </div>

</x-app-layout>