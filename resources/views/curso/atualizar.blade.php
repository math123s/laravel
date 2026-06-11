<div>
    <form action="{{ route('aluno.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $aluno->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}">
        <label for="periodo">Período</label>
        <input type="text" name="periodo" id="periodo" value="{{ $aluno->periodo }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>
