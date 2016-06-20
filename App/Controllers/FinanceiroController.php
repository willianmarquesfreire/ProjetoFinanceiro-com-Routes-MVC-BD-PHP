<?php

namespace App\Controllers;

use App\Models\Financeiro;
use App\Views\View;
use tools;

class FinanceiroController extends Controller {

    public function listar() {

        $_REQUEST['financeiro'] = Financeiro::listAll();
        $req = Financeiro::listAll();

        View::show('Financeiro', ["titulo" => "Financeiro",
            "fin" => $req, "usuario" => $_SESSION['usuario']]);
    }

    public function excluir() {

        Financeiro::delete("id=" . $_GET["id"]);
        View::show('Excluir', ["id" => $_GET['id']]);
    }

    public function cadastrar() {
        $id = 'null';
        $nrnota = $_POST['nrnota'];
        $categoria = $_POST['categoria'];
        $tipo = $_POST['tipo'];
        $valor = (double) $_POST['valor'];
        $dataemissao = date("Y-m-d"); //$_POST['dataemissao'];
        $datalancamento = date("Y-m-d");
        $observacoes = $_POST['observacoes'];
        $cadastrado = "false";
        
       
        if ($nrnota == '') {
        	View::show('Cadastrar', ['descricao' => $nrnota, 'mensagem' => "Não foi possivel cadastrar!", "modulo" => "financeiro"]);
        } else {
        	Financeiro::insert([$_SESSION['id'], $id, $nrnota, $categoria, $tipo, $valor, $dataemissao, $datalancamento, $observacoes]);
        	View::show('Cadastrar', ['descricao' => $nrnota, 'mensagem' => "$nrnota Cadastrado com sucesso!", "modulo" => "financeiro"]);
        }
        
        
     
        
    }

}

// INSERT INTO `financeiro` 
// 		(`usuario`, `id`, `nrnota`, `categoria`, `tipo`, `valor`, `dataemissao`, `datalancamento`, `observacoes`) 
// VALUES ('1', '1', '1', '1', '1', '1', '2016-05-24', '2016-05-24', '1');
