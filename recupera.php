<?php if( !isset($_SESSION) ) {
    session_start();
}
$_SESSION['token']=$_REQUEST['token'];
header("Location: http://katana.rgzlec.com/carritoKatana/index.php?view=recuperarclaveactualiza");//SITE_KATANA
die()
?>
Algo salio mal !!!! :(