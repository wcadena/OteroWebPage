<?php
define("SITE_KATANA","http://katana.rgzlec.com");
define("SITE_ID_EVENT","2");
// el archivo autoload inicializa todos lo archivos necesarios para que el framework funcione
include "core/autoload.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// cargamos el modulo iniciar.

$util = new \UtilitariosVarios\Correo;
//print_r($util);
$lb = new Lb();
$lb->loadModule("index");

?>