<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require ("../vendor/autoload.php");
    // require_once "../app/helpers/help.php";


    // session_start();

    $route = new Route\Router($_SERVER["REQUEST_URI"]);
    $route->route();