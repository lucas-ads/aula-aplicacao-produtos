<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('store-produto') }}" method="POST">
                @csrf
                <div class='form-group'>
                    <label for="nomeProduto">Descrição:</label>
                    <input type="text" id="nomeProduto" name="nome" class="form-control" required>
                </div>

                <div class='form-group mt-4'>
                    <label for="preco">Preço:</label>
                    <input type="number" id="preco" name="preco" class="form-control" required>
                </div>

                <div class='form-group mt-4'>
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" id="quantidade" name="quantidade" class="form-control" required>
                </div>

                <div class='form-group mt-4 text-center'>
                    <button class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>