<form action="{{ url('fornecedores') }}" method="POST">
    @csrf
    <div class="mt-5 w-64 mx-auto">
        <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Nome do Fornecedor</label>
            <input type="text" id="nome" name="nome" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome" required />
        </div>
        <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
            <label for="contato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Contato do Fornecedor</label>
            <input type="text" id="contato" name="contato" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contato" required />
        </div>
        <button type="submit">Create Fornecedor</button>
    </div> 
</form>
