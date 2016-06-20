<?php

namespace App\Models;

class Financeiro extends Model {

    public static $table = "financeiro";
    public static $fields = ['usuario','id','nrnota','categoria','tipo','valor','dataemissao','datalancamento','observacoes'];

}
