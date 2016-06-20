<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$project = substr(trim($_SERVER['PHP_SELF'], '/'), 0, strpos(trim($_SERVER['PHP_SELF'], '/'), "/"));
$GLOBALS['project'] = $project;


require __DIR__ . '/tools/WBaseManager.php';

session_start();
WBaseManager::start();

require './tools/autoload.php';
require './tools/http.php';

$_SESSION["conn"] = WBaseManager::class;
?>






