@layout('layout/CadastroView')
@section('interior')
<h1>{{titulo}}</h1>

<form id="form" role="form" action=<?php route("ProdutoController@cadastrar") ?> method="POST" class="form">
    <div class="form-group">
        <label for="nome" class="control-label">Nome: </label>
        <input type="text" name="nome" class="form-control">
        <br>
        <label for="valor" class="control-label">Valor: </label>
        <input type="text" name="valor" class="form-control">
        <br>
        <label for="descricao" class="control-label">Descrição: </label>
        <input type="text" name="descricao" class="form-control">
        <br>
        <label for="quantidade" class="control-label">Quantidade: </label>
        <input type="text" name="quantidade" class="form-control">
        <br>
        <button type="submit" class="btn btn-default">Salvar</button>
    </div>

</form>
<br>
<table id="int" class="table table-striped">
    <tr><th>ID</th>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descricao</th>
        <th>Quantidade</th>
        <th>Excluir</th>
    </tr>
    @foreach(pro)
    <tr>
        <td>{{pro=>id}}</td>
        <td>{{pro=>nome}}</td>
        <td>{{pro=>valor}}</td>
        <td>{{pro=>descricao}}</td>
        <td>{{pro=>quantidade}}</td>
        <td><a href=<?php route("ProdutoController@excluir", ['id' => '{{pro=>id}}', 'nome' => '{{pro=>nome}}']); ?>><span class="glyphicon glyphicon-remove"></span></p> </a></td>
    </tr>
    @endforeach

</table>
<br><br>

@endsection
