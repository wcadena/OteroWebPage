<?php
if( !isset($_SESSION) ) {
    session_start();
}

$email_w2 = ((isset($_POST["email"]))? $_POST["email"]:$_SESSION['email']);


$users = ClientData::getByEmail($email_w2);

$found = false;
//print_r($user);

foreach ($users as $user) {
    $user = ClientData::getById($user->id);
    $user->set_token();
    $mensajerio= new UtilitariosVarios\Correo();
    //print_r($mensajerio->darf());
    echo $mensajerio->envia_correo($user->email,$user->getFullname(),$user->email,$user->token);
    $found=true;
}

if($found){
    $_SESSION['error']='Correo enviado';
    Core::redir("index.php?view=clientaccess");
}else{
    $_SESSION['error']='Correo no registrado';
    Core::redir("index.php?view=recuperaclave");
}

?>

