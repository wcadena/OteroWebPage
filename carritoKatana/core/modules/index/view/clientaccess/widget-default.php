<br><br><br><br>
<div class="container">
    <?php if (isset($_SESSION['error'])) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error'];?></div>
        <?php unset($_SESSION['error']);?>
    <?php }?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">REGISTRO DE CLIENTES</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="index.php?action=clientaccess">

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Correo Electronico</label>
                            <div class="col-lg-10">
                                <input required* type="email" name="email" class="form-control" id="inputEmail1" placeholder="Correo Electronico">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
                            <div class="col-lg-10">
                                <input required type="password" name="password" class="form-control" id="inputPassword1" placeholder="Contrase&ntilde;a">
                            </div>
                        </div>
                        <div
                            class="g-recaptcha"
                            data-sitekey="6Lf7nBAUAAAAAKrqlaowOG-r3VVS3-W4HCZzhlyN"
                        >
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button >Iniciar</button>
                            </div>
                        </div>

                    </form>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <a class="btn btn-block btn-default" href="?view=register">Registrame</a>
                    <a class="btn btn-block btn-default" href="?view=recuperaclave">Recuperar Contrase;a</a>
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
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

