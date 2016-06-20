<?php

namespace App\Controllers;

use App\Models\Produto;
use App\Views\View;
use tools;

class LoginController extends Controller {

    public function entrar() {
        $existe = false;
        $id = null;

        $usuarios = $_SESSION['conn']::select('usuarios', '*')->fetchAll();
        foreach ($usuarios as $k => $v) {
            if ($_POST['usuario'] == $v['usuario'] && $_POST['senha'] == $v['senha']) {
                $existe = true;
                $id = $v['id'];
                break;
            }
        }

        if ($existe) {
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['senha'] = $_POST['senha'];
            $_SESSION['id'] = $id;
            header("Location: ./financeiro");
        } else {
            include __DIR__ . '/../Views/auth/LoginErro.php';
            session_destroy();
        }
    }

    public function novo() {
        include __DIR__ . "/../Views/auth/novoUsuario.php";
    }

    public function cadastrar() {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $_SESSION['conn']::insert("usuarios", ["usuario", "senha"], [$usuario, $senha]);
        include __DIR__ . '/../Views/auth/cadastrou.php';
    }

    public function sair() {
        session_destroy();
        include __DIR__ . '/../Views/auth/sair.php';
    }

}
