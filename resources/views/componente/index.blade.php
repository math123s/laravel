<div>
    
<form action="{{ route('componente.adicionar') }}" method="post">
    @csrf
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome">


    <label for="hora_inicio">E-mail</label>
    <input type="hora_inicio" name="hora_inicio" id="hora_inicio">

    <label for="hora_fim">E-mail</label>
    <input type="hora_fim" name="hora_fim" id="hora_fim">

    <button type="submit">Salvar</button>
    @isset($sucesso)
    <h1> {{$sucesso}} </h1>
    @endisset


</form>

@isset($componentes)
            @foreach($componentes as $componente)
                    <h3>{{ $componente->nome  }}</h3>
            @endforeach
@endisset



</div>