<div>
    <form action="{{ route('aluno.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $aluno->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ $aluno->email }}">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $aluno->telefone }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>
