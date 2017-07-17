<?php
// el archivo autoload inicializa todos lo archivos necesarios para que el framework funcione
include "core/autoload.php";
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// cargamos el modulo iniciar.
$lb = new Lb();
$lb->loadModule("index");

?>