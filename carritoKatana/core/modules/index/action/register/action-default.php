<?php if( !isset($_SESSION) ) {
	session_start();
}

//echo "Esta aqyui!!!";
$facebook=false;
if(isset($_SESSION['facebook'] )){
	$facebook=true;
}
/*echo "<pre>";
print_r($_SESSION);
echo '================>'.$facebook;
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
	$_SESSION['error']='2.-Llene por favor el Recatcha';
	Core::redir("index.php?view=clientaccess");
}
if(isset($_POST["accept"])||isset($_GET["action"])){
	//echo "hola2222";
	//echo '****'.$_POST["email"].'++++++++';
	//echo '****'.$user['email'].'++++++++';
	

	$name_w2 = ((isset($_POST["accept"]))? $_POST["name"]:$_SESSION['name']);
	$lastname_w2 = ((isset($_POST["accept"]))? $_POST["lastname"]:$_SESSION['lastname']);
	$email_w2 = ((isset($_POST["accept"]))? $_POST["email"]:$_SESSION['email']);
	$address_w2 = ((isset($_POST["accept"]))? $_POST["address"]:$_SESSION['address']);
	$password_w2 = ((isset($_POST["accept"]))? $_POST["password"]:$_SESSION['password']);
	$phone_w2 = ((isset($_POST["accept"]))? $_POST["phone"]:$_SESSION['phone']);

	
	
	
	//echo $correo_w2;
$c= ClientData::getByEmail($email_w2);
//echo "Entro!!!!";
//echo '****'.$c.'++++++++';
if($c==null){
	//id,name,email,first_name,last_name,picture,verified,cover,link
$client =  new ClientData();
$client->name = $name_w2;
$client->lastname = $lastname_w2;
$client->email = $email_w2;
$client->address = $address_w2;
$client->password = crypt($password_w2);
$client->phone = $phone_w2;
$client->add();


						function clean_input_4email($value, $check_all_patterns = true)
						{
						 $patterns[0] = '/content-type:/';
						 $patterns[1] = '/to:/';
						 $patterns[2] = '/cc:/';
						 $patterns[3] = '/bcc:/';
						 if ($check_all_patterns)
						 {
						  $patterns[4] = '/\r/';
						  $patterns[5] = '/\n/';
						  $patterns[6] = '/%0a/';
						  $patterns[7] = '/%0d/';
						 }
						 //NOTE: can use str_ireplace as this is case insensitive but only available on PHP version 5.0.
						 return preg_replace($patterns, "", strtolower($value));
						}

						$name = clean_input_4email($_POST["name"]);
						$lastname = clean_input_4email($_POST["lastname"]);
						$email = clean_input_4email($_POST["email"]);
						$address = clean_input_4email($_POST["address"]);
						$phone = clean_input_4email($_POST["phone"]);
//						$message = clean_input_4email($_POST["message"], false);
$adminemail = ConfigurationData::getByPreffix("general_main_email")->val; // corregido
$replyemail = $adminemail;
$success_sent_msg='
<body style="background:#2b2b2b; text-align:center; margin-top:40px">
Registro exitoso.
</body>

';

$replymessage = '
<meta content="es-mx" http-equiv="Content-Language" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<body>

<p><span class="style3"><strong>Estimado '. utf8_decode($name) .'</strong></span></p>
<p>Gracias por contactarnos.</p>
</body>';



$themessage = '
<html>
<meta content="es-mx" http-equiv="Content-Language" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
<table align="center" cellspacing="4" class="style2" style="width: 700">
	<tr>
		<td class="style5" style="width: 204px; height: 10;" valign="top"><strong>
		Nombre del Cliente:</strong></td>
		<td class="style5" style="width: 4px; height: 10;" valign="top">&nbsp;</td>
		<td class="style3" style="width: 550;" valign="top">'. utf8_decode($name." ".$lastname) .'</td>
	</tr>
	<tr>
		<td class="style5" style="height: 1;" valign="top" colspan="3">
		<hr class="style28" style="height: 1; width: 98%" /></td>
	</tr>
	<tr>
		<td class="style5" style="width: 204px; height: 10;" valign="top"><strong>
		Correo Electronico:</strong></td>
		<td class="style5" style="width: 4px; height: 10;" valign="top">&nbsp;</td>
		<td class="style3" style="width: 550;" valign="top">'. $email .'</td>
	</tr>
	<tr>
		<td class="style5" style="height: 1;" valign="top" colspan="3">
		<hr class="style28" style="height: 1; width: 98%" /></td>
	</tr>
	<tr>
		<td class="style5" style="width: 204px; height: 10;" valign="top"><strong>
		Direccion:</strong></td>
		<td class="style5" style="width: 4px; height: 10;" valign="top">&nbsp;</td>
		<td class="style3" style="width: 550;" valign="top">'. utf8_decode($address) .'</td>
	</tr>
	<tr>
		<td class="style5" style="height: 1;" valign="top" colspan="3">
		<hr class="style28" style="height: 1; width: 98%" /></td>
	</tr>
	<tr>
		<td class="style5" style="width: 204px; height: 10;" valign="top"><strong>
		Telefono:</strong></td>
		<td class="style5" style="width: 4px; height: 10;" valign="top">&nbsp;</td>
		<td class="style3" style="width: 550;" valign="top">'. $phone .'</td>
	</tr>
	
</table>

</body> 
</html>  ';

mail("$replyemail",
     "Katana - Nuevo registro",
     "$themessage",
	 "From: $replyemail\nReply-To: $replyemail\nContent-Type: text/html; charset=ISO-8859-1");

mail("$email",
     "Katana - Nuevo Registro",
     "$replymessage",
	 "From: $replyemail\nReply-To: $replyemail\nContent-Type: text/html; charset=ISO-8859-1");
echo $success_sent_msg;


	if(isset($_GET["action"])){
		$_SESSION['facebook'] = 'Entra*Facebook92822929292jj29';
		$_SESSION['email']=$email_w2;
		$_SESSION['password']=$password_w2;
		Core::redir("./?action=clientaccess");
		//echo 1;
	}else{
		Core::redir("index.php?view=clientaccess");
		//echo 2;
	}

}else{
Core::alert("Usuario registrado con esta direccion email.");
	if(isset($_GET["action"])){
		Core::redir("./?action=clientaccess");
	}else{
		Core::redir("./?view=register");
	}
}
}
?>