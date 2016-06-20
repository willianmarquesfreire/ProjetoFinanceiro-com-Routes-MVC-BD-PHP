<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpentBook</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <style>
        #login {
            padding-left:30%;
            padding-right:30%;
        }
    </style>

    <body>
        <br>
        <div class="container" id="login">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href=<?php route("ProdutoController@listar"); ?>>Exemplo Bootstrap</a>
                </div>
                <div class="panel-body">
                    <form class="form-group" action="<?php route('LoginController@entrar'); ?>" method="POST">
                        <label for="usuario" class="control-label">Usuario: </label>
                        <input type="text" name="usuario" class="form-control">
                        <br>
                        <label for="senha" class="control-label">Senha: </label>
                        <input type="text" name="senha" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-success">Entrar</button>
                        <button type="button" class="btn btn-default" onclick="location.href = 'index.php/novousuario'">Cadastrar</button>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>
