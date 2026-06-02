<div>
    
<form action="{{ route('administrador.adicionar') }}" method="post">
    @csrf
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome">


    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">

    <label for="telefone">telefone</label>
    <input type="telefone" name="telefone" id="telefone">

    <label for="telefone">E-mail</label>
    <input type="telefone" name="telefone" id="telefone">

    <label for="cpf">CPF</label>
    <input type="cpf" name="cpf" id="cpf">

    <label for="usuario">Usuario</label>
    <input type="usuario" name="usuario" id="usuario">

    <label for="senha">Senha</label>
    <input type="senha" name="senha" id="senha">

    <label for="status">Status</label>
    <input type="status" name="status" id="status">


    <button type="submit">Salvar</button>
    @isset($sucesso)
    <h1> {{$sucesso}} </h1>
    @endisset


</form>

@isset($administradors)
            @foreach($administradors as $administrador)
                    <h3>{{ $administrador->nome  }}</h3>
            @endforeach
@endisset



</div>