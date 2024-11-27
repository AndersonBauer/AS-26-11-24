@foreach($fornecedores as $fornecedor)
    <div>
        <h3>{{ $fornecedor->nome }}</h3>
        <p>{{ $fornecedor->contato }}</p>
        <a href="{{ url('fornecedores/'.$fornecedor->id.'/edit') }}">Edit</a>
        <form action="{{ url('fornecedores/'.$fornecedor->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach