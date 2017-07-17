<?php
if( !isset($_SESSION) ) {
	session_start();
}
$found = false;

$email_w2 = ((isset($_POST["email"]))? $_POST["email"]:$_SESSION['email']);
$password_w2 = ((isset($_POST["password"]))? $_POST["password"]:$_SESSION['password']);


$users = ClientData::getByEmail($email_w2);
$facebook=false;
if(isset($_SESSION['facebook'] )){
	$facebook=true;
}
/*echo "<pre>";
 print_r($users);
print_r($_SESSION);
echo "</pre>";*/
if(!$facebook)
if (isset($_POST['g-recaptcha-response'])){
	$email_w2 = ((isset($_POST["email"]))? $_POST["email"]:$_SESSION['email']);
	$password_w2 = ((isset($_POST["password"]))? $_POST["password"]:$_SESSION['password']);
	$siteKey = '6Lf7nBAUAAAAAKrqlaowOG-r3VVS3-W4HCZzhlyN';
	$secret = '6Lf7nBAUAAAAAITrv8T3mHg_s8QFCECAltuGKNNl';
	$recaptcha = new \ReCaptcha\ReCaptcha($secret);

	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
	//$found=$resp->isSuccess();
	//print_r($resp);
	if(!$resp->isSuccess()){
		$_SESSION['error']='Recatcha Caducado';
		Core::redir("index.php?view=clientaccess");
	}
	//print_r($_POST);
}else{
	$_SESSION['error']='1.-Llene por favor el Recatcha';
	Core::redir("index.php?view=clientaccess");
}

foreach ($users as $user) {
	if(crypt($password_w2,$user->password )==$user->password||$facebook){
		$_SESSION["client_id"]=$user->id;
		$found=true;
	}else{
		$_SESSION['error']='Usuario con clave erronea';
	}
}

if($found){
	Core::redir("index.php?view=client");
}else{
	Core::redir("index.php?view=clientaccess");
}

?>

