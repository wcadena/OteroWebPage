<?php
if( !isset($_SESSION) ) {
    session_start();
}

$token_w2 = ((isset($_POST["token"]))? $_POST["token"]:$_SESSION['token']);


$client = ClientData::getByToken($token_w2);

$found = false;
//print_r($user);


$client = ClientData::getByToken($token_w2);

if($_POST["password"]!="") {
    @$client->password = crypt($_POST["password"]);
    $client->update_passwd();
    $found = true;
}

if($found){
    $_SESSION['error']='Clave Cambiada';
    Core::redir("index.php?view=clientaccess");
}else{
    $_SESSION['error']='Clave no valida';
    Core::redir("index.php?view=recuperaclave");
}

?>

