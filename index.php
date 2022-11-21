<?php

// include bootstrap
require "app/bootstrap.php";

// seperator requesturi for routing system
$requestUri = $_SERVER["REQUEST_URI"];
$route = explode("/", $requestUri);
array_shift($route);


if(route(0) == "" || route(0) == "index") {
    $route[0] = "index";
}

// ------ page not found -------
if(!file_exists(controller(route(0)))){
    $route[0] = "404";
}

// ----- require controller -----
require controller(route(0));
?>