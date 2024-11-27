@foreach($produtos as $produto)
    <div>
        <h3>{{ $produto->nome }}</h3>
        <p>{{ $produto->preco }}</p>
        <p>{{ $produto->quantidade }}</p>
        @if(isset($produto->cat_id))
            <p class="text-sm text-gray-500 dark:text-gray-400"> Categoria: {{ $produto->cat_id }}</p>
        @else
            <p class="text-red-400">Nenhuma Categoria</p>
        @endif
        <a href="{{ url('produtos/'.$produto->id.'/edit') }}">Edit</a>
        <form action="{{ url('produtos/'.$produto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach