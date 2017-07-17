<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">RECUPERAR CLAVE</div>
                <div class="panel-body">
                    <?php if (isset($_SESSION['error'])) {?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error'];?></div>
                    <?php unset($_SESSION['error']);?>
                    <?php }?>
                    <form class="form-horizontal" role="form" method="post" action="index.php?action=recuperaclave">

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Correo Electronico</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Correo Electronico">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-block btn-default">Recuperar</button>
                            </div>
                        </div>
                    </form>
                    <a class="btn btn-block btn-default" href="?view=register">Registrame</a>
                    <a class="btn btn-block btn-default" href="?view=clientaccess">Regresar</a>

                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

