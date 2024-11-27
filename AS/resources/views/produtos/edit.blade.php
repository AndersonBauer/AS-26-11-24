<form action="{{ url('produtos/'. $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mx-auto w-64 mt-10 text-center">
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Nome do Produto</label>
                <input type="text" id="nome" name="nome" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $produto->nome }}" placeholder="Nome" required />
            </div>
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="preco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Preço do Produto</label>
                <input type="number" id="preco" name="preco" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $produto->preco }}" placeholder="Preco" required />
            </div>
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="quantidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Quantidade do Produto</label>
                <input type="number" id="quantidade" name="quantidade" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $produto->quantidade }}" placeholder="quantidade" required />
            </div>
            <button class="text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3 mb-2" type="submit">Update Produto</button>
        </div>
    </form>