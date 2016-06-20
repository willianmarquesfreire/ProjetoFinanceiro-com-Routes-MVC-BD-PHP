<?php

namespace App\Models;

class Model {

    public static $table = "";
    public static $fields = [];

    public static function insert($values) {
        return $_SESSION["conn"]::insert(static::$table, static::$fields, $values);
    }

    public static function update($set, $where) {
        return $_SESSION["conn"]::update(static::$table, $set, $where);
    }

    public static function delete($sql) {
        return $_SESSION["conn"]::delete(static::$table, 'usuario=' . $_SESSION['id'] . ' and ' . $sql);
    }

    public static function listAll() {
        return $_SESSION["conn"]::select(static::$table, $_SESSION["conn"]::W_ALL, "usuario" . "=" . $_SESSION['id'])->fetchAll();
    }

    public static function listItem() {
        return $_SESSION["conn"]::select(static::$table, $_SESSION::W_ALL, null, 1);
    }

}
