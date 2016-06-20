<?php

require __DIR__ . '/../App/routes.php';
$url = strtolower($_SERVER['REQUEST_URI']);
$route = (strpos($url, '?') != false) ? substr($url, strpos($url, '.php') + 4, strpos($url, '?') - strpos($url, '.php') - 4) : substr_replace($url, '', 0, strpos($url, '.php') + 4);
if ($route == "" || $route == "/") {
    include __DIR__ . "/../public/server.php";
} else {
    open($routes, $route);
}

function open($routes, $route) {
    foreach ($routes as $k => $v) {
        if ($v[1] == $route) {
            $nameClass = substr($v[2], 0, strpos($v[2], '@'));
            $location = typeLocation($nameClass);

            $class = $location . $nameClass;
            $method = substr($v[2], strpos($v[2], '@') + 1, strlen($v[2]));

            $obj = new $class();
            $obj->$method();
        }
    }
}

function typeLocation($nameClass) {
    if (strstr($nameClass, 'Controller')) {
        return "App\\Controllers\\";
    } else if (strstr($nameClass, 'View')) {
        return "App\\views\\";
    } else {
        return "";
    }
}

function route($act, $params = null) {

    require __DIR__ . '/../App/routes.php';
        
    foreach ($routes as $k => $v) {
        if ($v[2] == $act) {
        	if ($params !== null) {
        		$r = substr($_SERVER["REQUEST_URI"], 0, strpos($_SERVER["REQUEST_URI"], ".php") + 4) . $v[1] . "?"; //TODO
        		
        		foreach ($params as $p => $q) {
        			$r .= "$p=$q&&";
        		}
        		
        		$r = substr($r, 0, strlen($r) - 2);
        		
        		echo $r;
        	} else {
        		echo substr($_SERVER["REQUEST_URI"], 0, strpos($_SERVER["REQUEST_URI"], ".php") + 4) . $v[1];
        	}
           
        }
    }
}

function index() {
    header("Location : index.php");
}

// function request() {}
// function post() {}
// function get() {}