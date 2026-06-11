<div>
<div>
    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
       
        <label for="periodo">Periodo</label>
        <input type="time" name="periodo" id="periodo">

        <button type="submit">Salvar</button>


    @isset($sucesso)
    <h1> {{$sucesso}} </h1>
    @endisset


</form> 

<table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($cursos)
                @foreach($cursos as $curso)
                    <tr>
                        <td>
                            <h3>{{ $curso->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $curso->periodo }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form> 
                        </td>
                        <td>
                        <form action="{{ route('curso.atualizar', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
    
</div>

</div>
