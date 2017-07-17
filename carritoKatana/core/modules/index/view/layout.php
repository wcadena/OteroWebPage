<?php
function getter($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;}
echo getter(SITE_KATANA.'/cabecerakatana/');
?>
<link rel="stylesheet" type="text/css" href="res/lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="res/lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="res/btn-label.css">
<script src="res/lib/jquery/jquery.min.js"></script>
<style>
    .form-control{
        width: 100%!important;
        height: 40px!important;
    }
</style>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-xs-5">
      <br><h1>Busqueda de Productos</h1>
      </div>
      <div class="col-md-7 col-xs-5">
        <br><br>
        <form class="form-horizontal" role="form">
        <div class="input-group">
        <input type="hidden" name="view" value="productos">
        <input type="hidden" name="act" value="search">
              <input type="text" name="q" placeholder="Buscar productos ..." class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">&nbsp;<i class="fa fa-search"></i>&nbsp;</button>
              </span>
            </div><!-- /input-group -->
        </form>
<br><br>
      </div>
      <div class="col-md-2 col-xs-2">
        <!-- cart button -->
        <br><br>
        <a href="index.php?view=mycart" class="btn btn-block btn-default"><i class="fa fa-shopping-cart"></i>
        <?php if(isset($_SESSION["cart"])):?>
        <span class="badge"><?php echo count($_SESSION["cart"]); ?></span>
        <?php endif; ?>
      </a>
      </div>

    </div>
  </div>
</section>
<?php /**?>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <!--<li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>-->
<?php
$cats = CategoryData::getPublics();
?>
<?php if(count($cats)>0):?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th-list"></i> Productos<b class="caret"></b></a>
        <ul class="dropdown-menu">
<?php foreach($cats as $cat):?>
        <?php if ($cat->id<>2){?>
         <li><a href="index.php?view=productos&cat=<?php echo $cat->short_name; ?>"><?php echo $cat->name; ?></a></li>
        <?php }?>
<?php endforeach; ?>
        </ul>
      </li>
<?php endif; ?>
<!--      <li><a href="index.php?view=contacto"><i class="fa fa-envelope"></i> Contactanos</a></li> -->
    </ul>

    <ul class="nav navbar-nav navbar-right">

<?php if(!isset($_SESSION["client_id"])):?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=clientaccess">Iniciar Sesion</a></li>
          <li><a href="index.php?view=register">Registrarse</a></li>
        </ul>
      </li>
    </ul>
<?php else:
$client = ClientData::getById($_SESSION["client_id"]);
?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; <?php echo $client->name." ".$client->lastname;?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=client">Inicio</a></li>
          <li><a href="logout.php">Salir</a></li>
        </ul>
      </li>
    </ul>
<?php endif; ?>
  </div><!-- /.navbar-collapse -->
</div>
</nav>
<?php /**/?>
<!-- nuevolog234-->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-text navbar-right">
<?php if(!isset($_SESSION["client_id"])):?>
                <a href="index.php?view=clientaccess" class="navbar-link btn btn-default">Iniciar Sesion</a>
                <a href="index.php?view=register" class="navbar-link btn btn-default">Registrarse</a>
<?php else:
    $client = ClientData::getById($_SESSION["client_id"]);
    ?>
        <a href="index.php?view=client"  class="navbar-link btn btn-default" ><i class="fa fa-user"></i> &nbsp; <?php echo $client->name." ".$client->lastname;?></a>
    <?php /**?><a href="index.php?view=client" class="navbar-link btn btn-default">Inicio</a><?php **/?>
        <a href="logout.php" class="navbar-link btn btn-default">Salir</a>

<?php endif; ?>
        </div>
    </div>
</nav>
<!-- nuevolog234-->

<?php View::load("index"); ?>
<br><br><br>
<section>
<div class="container">

<!-- - - - -->
<div class="row">
<div class="col-md-12">
<hr>
<p><b>Katana PRO</b> &copy; 2015</p>
<ul class="list-inline">
<li><p class="text-muted">An <a href="http://evilnapsis.com/">Evilnapsis</a> Production</p></li>
<li><a href="http://evilnapsis.com/services/support/">Soporte</a></li>
</ul>
</div>
</div>
</div>
</section>
<br>
  <script src="res/lib/bootstrap/js/bootstrap.min.js"></script>
  <script>
  $(".tip").tooltip();
  </script>
</body>

</html>