@layout('layout/CadastroView')
@section('interior')
<h1>{{titulo}}</h1>

<form id="form" role="form" action=<?php route("CategoriaController@cadastrar") ?> method="POST" class="form">
    <div class="form-group">
        <label for="descricao" class="control-label">Descrição: </label>
        <input value="{{descricao}}" type="text" name="descricao" class="form-control">
        <br>
        <label for="observacoes" class="control-label">Observações: </label>
        <input value="{{observacoes}}"  type="text" name="observacoes" class="form-control">
        <br>
        <button type="submit" class="btn btn-default">Salvar</button>
    </div>

</form>
<br>
<table id="int" class="table table-striped">
    <tr><th>Descrição</th>
        <th>Observações</th>
        <th>Alterar</th>
        <th>Excluir</th>
    </tr>
    @foreach(cat)
    <tr>
        <td>{{cat=>descricao}}</td>
        <td>{{cat=>observacoes}}</td>
        <td><a href=<?php route("CategoriaController@listar", ['id' => '{{cat=>id}}', 'descricao' => '{{cat=>descricao}}', 'observacoes' => '{{cat=>observacoes}}']); ?>><span class="glyphicon glyphicon-refresh"></span></p> </a></td>
        <td><a href=<?php route("CategoriaController@excluir", ['id' => '{{cat=>id}}', 'descricao' => '{{cat=>descricao}}']); ?>><span class="glyphicon glyphicon-remove"></span></p> </a></td>
    </tr>
    @endforeach

</table>
<br><br>

@endsection
