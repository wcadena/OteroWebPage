<br><br><br><br>
<div class="container">
    <?php if (isset($_SESSION['error'])) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error'];?></div>
        <?php unset($_SESSION['error']);?>
    <?php }?>
    <?php $user = new ClientData();?>
    <?php $correo='';?>
    <?php if (isset($_SESSION['token'])) {?>
        <?php $user = ClientData::getByToken($_SESSION['token']);
                if(isset($user)){
                    $correo=$user->email ;
                }

        ?>

    <?php }?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">CAMBIAR CLAVE</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="index.php?action=recuperarclaveactualiza">

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Correo Electronico</label>
                            <div class="col-lg-10">
                                <input readonly type="email" name="email" class="form-control" id="inputEmail1" placeholder="Correo Electronico" value="<?php echo $correo;?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 control-label">Nueva Contrase&ntilde;a</label>
                            <div class="col-lg-10">
                                <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Contrase&ntilde;a">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-block btn-default">Cambiar </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

