@layout('layout/CadastroView')
@section('interior')
<h1>{{titulo}}</h1>

<form id="form" role="form" action=<?php route("FinanceiroController@cadastrar") ?> method="POST" class="form">
    <div class="form-group">
        <label for="id" class="control-label">ID: </label>
        <input type="text" name="id" class="form-control">
        <br>
        <label for="nrnota" class="control-label">Nº Nota: </label>
        <input type="text" name="nrnota" class="form-control">
        <br>
        <label for="categoria" class="control-label">Categoria: </label>
        <input type="text" name="categoria" class="form-control">
        <br>
        <label for="tipo" class="control-label">Tipo: </label>
        <input type="text" name="tipo" class="form-control">
        <br>
        <label for="valor" class="control-label">Valor: </label>
        <input type="text" name="valor" class="form-control">
        <br>
        <label for="dataemissao" class="control-label">Data de Emissão: </label>
        <input type="text" name="dataemissao" class="form-control">
        <br>
        <label for="datalancamento" class="control-label">Data de Lançamento: </label>
        <input type="datetime" name="datalancamento" class="form-control">
        <br>
        <label for="observacoes" class="control-label">Observações: </label>
        <input type="datetime" name="observacoes" class="form-control">
        <br>
        <button type="submit" class="btn btn-default">Salvar</button>
    </div>

</form>
<br>
<table id="int" class="table table-striped">
    <tr>
        <th>N° Nota</th>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Data de Emissão</th>
        <th>Data de Lançamento</th>
        <th>Observações</th>
         <th>Editar</th>
        <th>Excluir</th>
    </tr>
    @foreach(fin)
    <tr>
        <td>{{fin=>nrnota}}</td>
        <td>{{fin=>categoria}}</td>
        <td>{{fin=>tipo}}</td>
        <td>{{fin=>valor}}</td>
        <td>{{fin=>dataemissao}}</td>
        <td>{{fin=>datalancamento}}</td>
        <td>{{fin=>observacoes}}</td>
        <td><a href=<?php route("FinanceiroController@alterar", ['id' => '{{fin=>id}}', 'nrnota' => '{{fin=>nrnota}}']); ?>><span class="glyphicon glyphicon-refresh"></span></p> </a></td>
        <td><a href=<?php route("FinanceiroController@excluir", ['id' => '{{fin=>id}}', 'nrnota' => '{{fin=>nrnota}}']); ?>><span class="glyphicon glyphicon-remove"></span></p> </a></td>
    </tr>
    @endforeach

</table>
<br><br>

@endsection
