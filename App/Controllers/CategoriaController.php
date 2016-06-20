<?php

namespace App\Controllers;

use App\Models\Categoria;
use App\Views\View;
use tools;

class CategoriaController extends Controller {

    public function listar() {

        $_REQUEST['categoria'] = Categoria::listAll();
        $req = Categoria::listAll();
        
        if(empty(!$_GET)) {
	        $id = $_GET['id'];
	        $descricao = $_GET['descricao'];
	        $observacoes = $_GET['observacoes'];
        } else {
        	$id = "";
        	$descricao = "";
        	$observacoes = "";
        }
        View::show('Categoria', ["titulo" => "Alterar Categoria",
        		"cat" => $req, "usuario" => $_SESSION['usuario'], "id" => $id, "descricao" => $descricao, "observacoes" => $observacoes]);
        
    }

    public function excluir() {

        Categoria::delete("id=" . $_GET["id"]);
        View::show('Excluir', ["id" => $_GET['id']]);
    }

    public function cadastrar() {
        $id = 'null';
        $descricao = $_POST['descricao'];
        $observacoes = $_POST['observacoes'];
        
        if ($descricao == '') {
        	View::show('Cadastrar', ['descricao' => $descricao, 'mensagem' => "Não foi possivel cadastrar!", "modulo" => "categoria"]);
        } else {
        	Categoria::insert([$_SESSION['id'], $id, $descricao, $observacoes]);
        	View::show('Cadastrar', ['descricao' => $descricao, 'mensagem' => "$descricao Cadastrado com sucesso!", "modulo" => "categoria"]);
        }
    }
    
    public function alterar() {
    	$id = $_GET['id'];
    	$descricao = $_GET['descricao'];
    	$observacoes = $_GET['observacoes'];
    	
    }
}


// INSERT INTO `financeiro` 
// 		(`usuario`, `id`, `nrnota`, `categoria`, `tipo`, `valor`, `dataemissao`, `datalancamento`, `observacoes`) 
// VALUES ('1', '1', '1', '1', '1', '1', '2016-05-24', '2016-05-24', '1');
