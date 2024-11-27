<form action="{{ url('produtos') }}" method="POST">
    @csrf
    <div class="mt-5 w-64 mx-auto">
        <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Nome do Produto</label>
            <input type="text" id="nome" name="nome" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome" required />
        </div>
        <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
            <label for="preco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Preço do Produto</label>
            <input type="number" id="preco" name="preco" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Preco" required />
        </div>
        <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
            <label for="quantidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Quantidade do Produto</label>
            <input type="number" id="quantidade" name="quantidade" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="quantidade" required />
        </div>
        <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
            <select name="desc" id="desc">
            <option selected value="">Choose a Categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id}}">{{ $categoria->descricao }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Create Product</button>
    </div> 
</form>

