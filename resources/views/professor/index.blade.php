<div>
    <form action="{{ route('professor.adicionar') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        
        <button type="submit">Salvar</button>

    @isset($sucesso)
    <h1> {{$sucesso}} </h1>
    @endisset


</form>

@isset($professores)
            @foreach($professores as $professor)
                    <h3>{{ $professor->nome  }}</h3>
                    <h3>{{ $professor->email  }}</h3>
                    <h3>{{ $professor->telefone  }}</h3>
            @endforeach
@endisset


</div>
