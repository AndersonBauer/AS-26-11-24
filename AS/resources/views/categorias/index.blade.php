@foreach($categorias as $categoria)
    <div>
        <h3>{{ $categoria->descricao }}</h3>
        <a href="{{ url('categorias/'.$categoria->id.'/edit') }}">Edit</a>
        <form action="{{ url('categorias/'.$categoria->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach