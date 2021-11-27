<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Cadastrado por</th>
                        <th>Cadastrado em</th>
                        <th>Modificado em</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>
                                <img style="height: 80px" src="{{ Storage::url($produto->image_path) }}">
                            </td>
                            <td class="align-middle">{{ $produto->id }}</td>
                            <td class="align-middle">{{ $produto->nome }}</td>
                            <td class="align-middle">{{ $produto->preco }}</td>
                            <td class="align-middle">{{ $produto->quantidade }}</td>
                            <td class="align-middle">{{ $produto->created_by }}</td>
                            <td class="align-middle">{{ $produto->created_at }}</td>
                            <td class="align-middle">{{ $produto->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary float-right" href="{{ route('create-produto') }}">Cadastrar Produto</a>
        </div>
    </div>
</x-app-layout>