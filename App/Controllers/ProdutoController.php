<?php

namespace App\Controllers;

use App\Models\Produto;
use App\Views\View;
use tools;

class ProdutoController extends Controller {

    public function listar() {

        $_REQUEST['produtos'] = Produto::listAll();
        $req = Produto::listAll();

        View::show('Produto', ["titulo" => "Cadastro de Produtos",
            "pro" => $req, "usuario" => $_SESSION['usuario']]);
    }

    public function excluir() {

        Produto::delete("id=" . $_GET["id"]);
        View::show('Excluir', ["id" => $_GET['id']]);
    }

    public function cadastrar() {
        $id = 'null';
        $nome = (string) $_POST['nome'];
        $valor = (int) $_POST['valor'];
        $descricao = (string) $_POST['descricao'];
        $quantidade = (int) $_POST['quantidade'];

        Produto::insert([$_SESSION['id'], $id, $nome, $valor, $descricao, $quantidade]);

        View::show('Cadastrar', ['nome' => $nome]);
    }

}
