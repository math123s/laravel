<div>
<div>
    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
       
        <label for="periodo">Periodo</label>
        <input type="time" name="periodo" id="periodo">

        <button type="submit">Salvar</button>
    </form>

    
</div>

</div>
