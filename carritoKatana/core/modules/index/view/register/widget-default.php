<div class="container">
	<div class="row">
		<div class="col-md-7">
    <h3>Registrate para poder participar y comprar!</h3>  
    <p>Si gustas participar en preguntas o deseas comprar, es requerimiento obligatorio registrarse utilizando el formulario de la derecha y ofrecer datos fidedignos.</p>
    </div>
		<div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-heading">REGISTRO DE CLIENTES</div>
				<div class="panel-body">
<form class="form-horizontal" role="form" method="post" action="index.php?action=register">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">*Nombre</label>
    <div class="col-lg-10">
      <input type="text" required name="name" class="form-control" id="inputEmail1" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">*Apellido</label>
    <div class="col-lg-10">
      <input type="text" required name="lastname" class="form-control" id="inputEmail1" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-lg-10">
      <input type="text" name="phone" class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-lg-10">
      <input type="text" name="address" class="form-control" id="inputEmail1" placeholder="Direccion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">*Correo Electronico</label>
    <div class="col-lg-10">
      <input type="email" name="email" required class="form-control" id="inputEmail1" placeholder="Correo Electronico">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">*Contrase&ntilde;a</label>
    <div class="col-lg-10">
      <input type="password" required name="password" class="form-control" id="inputPassword1" placeholder="Contrase&ntilde;a">
    </div>
  </div>

    <div class="form-group">
        <div class="col-lg-10">
            <div
                class="g-recaptcha"
                data-sitekey="6Lf7nBAUAAAAAKrqlaowOG-r3VVS3-W4HCZzhlyN"
            >
            </div>
        </div>
        </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="accept" required> Acepto terminos y condiciones de uso
                </label>
            </div>
        </div>
    </div>
  <div class="form-group">
      <div class="col-lg-10">
      <button type="submit" class="btn btn-block btn-default">Registrarme</button>
    </div>
  </div>

</form>
                  <script src='https://www.google.com/recaptcha/api.js'></script>
                  <script>
                    window.fbAsyncInit = function() {
                      FB.init({
                        appId      : '230103400748893',
                        xfbml      : true,
                        version    : 'v2.8'
                      });
                    };

                    (function(d, s, id){
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) {return;}
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_US/sdk.js";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                  </script>
      <p class="text-muted">* Campos obligatorios</p>
                  <div
                      class="fb-like"
                      data-share="true"
                      data-width="450"
                      data-show-faces="true">
                  </div>
                  <!----------------------------facebook-->
                  <?php require_once 'php-graph-sdk-5.0.0/src/Facebook/autoload.php';?>
                  <?php
                  $fb = new Facebook\Facebook([
                      'app_id' => '230103400748893',
                      'app_secret' => '4349e48f5a2712054fcc2b38441e00de',
                      'default_graph_version' => 'v2.5',
                  ]);
                  ///////////////////////////////////////////////////////
                  $helper = $fb->getRedirectLoginHelper();
                  $permissions = ['email', 'user_birthday']; // optional
                  $loginUrl = $helper->getLoginUrl(SITE_KATANA.'/login-callback.php', $permissions);

                  echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
                  ?>
                  <!----------------------------facebook-->
				</div>
			</div>
		</div>
	</div>
</div>