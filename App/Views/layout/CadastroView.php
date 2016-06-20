<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpentBook</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <style>
        .glyphicon {
            font-size: 25px;
        }
        #usuario {
            float: right;
            font-size: 15px;

        }
    </style>

    <body>
        <div class="container-fluid">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <button type="button" class="btn btn-success" onclick="location.href = '../index.php/financeiro'">
                        Financeiro
                    </button>
                    
                    <button type="button" class="btn btn-warning" onclick="location.href = '../index.php/categoria'">
                        Categoria
                    </button>

                    <button type="button" class="btn btn-danger" onclick="location.href = '../index.php/sair'">
                        Sair
                    </button>

                    <span class="label label-info" id="usuario"> Bem Vindo <?php echo $_SESSION["usuario"]; ?></span>

                </div>
                <div class="panel-body">@include('interior')</div>
            </div>
        </div>
    </body>
</html>
