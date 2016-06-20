<?php

namespace App\Models;

class Produto extends Model {

    public static $table = "produtos";
    public static $fields = ['usuario', 'id', 'nome', 'valor', 'descricao', 'quantidade'];

}
