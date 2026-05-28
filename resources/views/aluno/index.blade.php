<div>
    
<form action="{{ route('aluno.adicionar') }}" method="post">
    @csrf
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome">


    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">

    <button type="submit">Salvar</button>
    @isset($sucesso)
    <h1> {{$sucesso}} </h1>
    @endisset


</form>

@isset($alunos)
            @foreach($alunos as $aluno)
                    <h3>{{ $aluno->nome  }}</h3>
            @endforeach
@endisset



</div>