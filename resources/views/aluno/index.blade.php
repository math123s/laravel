<div>
    
<form action="{{ route('aluno.adicionar') }}" method="post">
    @csrf
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Salvar</button>
    @isset($sucess)
    <h1> {{$sucess}} </h1>
    @endisset


</form>

@isset($alunos)
            @foreach($alunos as $aluno)
                    <h3>{{ $aluno->nome  }}</h3>
            @endforeach
@endisset



</div>