<?php

include "controller/Core.php";
include "controller/View.php";
include "controller/Module.php";
include "admin/core/controller/Database.php";
include "admin/core/controller/Viewer.php";
include "admin/core/controller/IpLogger.php";
include "controller/Executor.php";
//# include "controller/Session.php"; [remplazada]

include "controller/forms/lbForm.php";
include "controller/forms/lbInputText.php";
include "controller/forms/lbInputPassword.php";
include "controller/forms/lbValidator.php";

// 10 octubre 2014
include "controller/Model.php";
include "/controller/Bootload.php";
include "controller/Action.php";

// 13 octubre 2014
include "controller/Request.php";


// 14 octubre 2014
include "controller/Get.php";
include "controller/Post.php";
include "controller/Cookie.php";
include "controller/Session.php";
include "controller/Lb.php";

//23/12/2016//wcadena send mail

include("mail/class.phpmailer.php");
include("mail/class.smtp.php");
include("mail/Correo.php");
include "admin/core/controller/class.upload.php";
//04/01/2017
include "catcha/ReCaptcha/ReCaptcha.php";
include "catcha/ReCaptcha/RequestMethod.php";
include "catcha/ReCaptcha/RequestParameters.php";
include "catcha/ReCaptcha/Response.php";
include "catcha/ReCaptcha/RequestMethod/Post.php";

?>