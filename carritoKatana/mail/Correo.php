<?php
/**
 * Created by PhpStorm.
 * User: wcadena
 * Date: 23/12/2016
 * Time: 8:30
 */

namespace UtilitariosVarios;


class Correo
{
    /**
     * Constructor.
     * @param boolean $exceptions Should we throw external exceptions?
     */
    public $array_correo;
    public function __construct()
    {
        $this->array_correo = parse_ini_file("soportem.ini", true);

    }
    public function darf(){
        return $this->array_correo;
    }

    public function envia_correo($para, $nombre_para, $usuario, $clave) {
        $mail = new \PHPMailer();

        //$body = $mail->getFile($mensaje_cuerpo);
        $body = '<body>
<p>Su Usuario: ' . $usuario . '</p> as solicitado recuperar clave, por favor ingrese a 
<p><a href="http://katana.rgzlec.com/recupera.php?token='.$clave.'" target="_blank">http://katana.rgzlec.com/recupera.php?token='.$clave.'</a></p>
</body>
';
        //$body = preg_replace("[\]", '', $body);

        $mail->IsSMTP();
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier

        $mail->Host = $this->array_correo["correo"]["Host"];      // sets GMAIL as the SMTP server
        $mail->Port = $this->array_correo["correo"]["Port"];                   // set the SMTP port for the GMAIL server

        $mail->Username = $this->array_correo["correo"]["Username"];  // GMAIL username
        $mail->Password = $this->array_correo["correo"]["Password"];            // GMAIL password

        $mail->AddReplyTo($this->array_correo["correo"]["AddReplyTo_mail"], $this->array_correo["correo"]["AddReplyTo_name"]);

// $mail->From       = "scanner@aerogal.info";
        $mail->From = $this->array_correo["correo"]["From"];
        $mail->FromName = $this->array_correo["correo"]["FromName"];

        $mail->Subject = "Recuperar_clave CivilTask";

//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->WordWrap = 50; // set word wrap

        $mail->MsgHTML($body);

        $mail->AddAddress($para, $nombre_para);

        //$mail->AddAttachment("images/help-desk.jpg");             // attachment

        $mail->SMTPDebug = 1;
        $mail->IsHTML(true); // send as HTML

        if (!$mail->Send()) {
            echo "<code><pre>Error en Envio: " . $mail->ErrorInfo."<pre><code>";
        } else {
            echo "Mensaje Enviado!";
        }
    }
}