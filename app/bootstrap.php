<?php
session_start();
ob_start();


// AutoLoad classes
function loadClasses($className) {
    require __DIR__ . "/classes/" . strtolower($className) . ".php";
}
spl_autoload_register("loadClasses");
/* ----------------------------------------------- */

// database integration

$config = require "config.php";

try {
    $db = new BasicDB($config["db"]["host"],  $config["db"]["name"], $config["db"]["user"], $config["db"]["password"]);
} catch (PDOException $e) {
    die($e->getMessage());
}
/* ----------------------------------------------- */

// require helpers
foreach (glob(PATH. "\app\helper\*.php") as $helperFile) {
    require $helperFile;
}
/* ----------------------------------------------- */