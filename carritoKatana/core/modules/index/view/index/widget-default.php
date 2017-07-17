<?php 
$coin_symbol = ConfigurationData::getByPreffix("general_coin")->val;
$img_default = ConfigurationData::getByPreffix("general_img_default")->val;
$cnt=0;
$slides = SlideData::getPublics();
$featureds = ProductData::getFeatureds();
?>
<section>
  <div class="container">

  <div class="row">

  <div class="col-md-12">
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <?php if(count($slides)>0):?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
<?php foreach($slides as $s):?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $cnt; ?>" class="<?php if($cnt==0){ echo "active";}?>"></li>
<?php $cnt++; endforeach; ?>

      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
<?php $cnt=0; foreach($slides as $s):
$url = "admin/storage/slides/".$s->image;
?>

        <div class="item <?php if($cnt==0){ echo "active"; }?>">
          <img src="<?php echo $url; ?>" alt="...">
          <div class="carousel-caption">
            <h2><?php echo $s->title; ?></h2>
          </div>
        </div>
<?php $cnt++; endforeach; ?>
<!--
        <div class="item">
          <img src="http://placehold.it/800x300" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        -->
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  <?php endif; ?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php

$nproducts = count($featureds);
$filas = $nproducts/3;
$extra = $nproducts%3;
if($filas>1&& $extra>0){ $filas++; }
$n=0;
?>
<?php if(count($featureds)>0):?>
<a href="./"><div style="background:#333;font-size:25px;color:white;padding:5px;">Productos Destacados</div></a>
<br>
<?php for($i=0;$i<$filas;$i++):?>
  <div class="row">
<?php for($j=0;$j<3;$j++):
$p=null;
if($n<$nproducts){
$p = $featureds[$n];
}
?>
<?php if($p!=null):
$img = "admin/storage/products/".$p->image;
if($p->image==""){
  $img=$img_default;
}
?>
  <div class="col-md-4">
 <center>   <img src="<?php echo $img; ?>"  style="width:120px;height:120px;"></center>
  <h4 class="text-center"><?php echo $p->name; ?></h4>
<h3 class="text-center text-primary"> <?php echo $coin_symbol." ".number_format($p->price,2,".",","); ?></h3>
<?php 
$in_cart=false;
if(isset($_SESSION["cart"])){
  foreach ($_SESSION["cart"] as $pc) {
    if($pc["product_id"]==$p->id){ $in_cart=true;  }
  }
  }

  ?>
<center>

<?php
 if(!$p->in_existence):?>

<a href="javascript:void()" class="btn btn-labeled btn-sm btn-warning" title="No disponible">
                <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>No Disponible</a>
<br>

<?php elseif(!$in_cart):?>

    <?php if(false && $p->price>0){ ?>
    <a href="index.php?action=addtocart&product_id=<?php echo $p->id; ?>&href=cat" class="btn btn-labeled btn-sm btn-primary" title="A&ntilde;adir al carrito">
                <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>Comprar</a>
    <?php }else if(false) { ?>
    <a href="index.php?action=buyeventogratuito&product_id=<?php echo $p->id; ?>" class="btn btn-labeled btn-sm btn-primary" title="A&ntilde;adir al carrito">
            <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>Adquirir </a>
    <?php }else {
        if(!isset($_SESSION["client_id"])){?>
        <a href="index.php?view=clientaccess" class="btn btn-labeled btn-sm btn-primary" title="Like - me gusta ">
            <span class="btn-label"><i class="glyphicon glyphicon-star"></i></span>Me Gusta </a>
    <?php }}?>
<?php else:?>
<center><a href="javascript:void()" class="btn btn-labeled btn-sm btn-success" title="Ya esta en el carrito">
                <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>Ya esta agregado</a>


<br>
<?php endif; ?>

    <br>
    <?php
    $user_name = isset($_SESSION["client_id"]) ? $_SESSION["client_id"] : '';
    if($user_name<>''){
        $like = LikeproductData::getAllByClientIdYProductoId($user_name,$p->id);
        //echo '------>'.count($like);
        $accion_like='add';
        $Accion_like_titulo='Me gusta';
        if(count($like)>0){
            $accion_like='del';
            $Accion_like_titulo='No me gusta';
        }
    ?>
    <?php /*<code><pre><?php print_r($like) ;?></pre></code> */?>
    <a href="index.php?action=addtoLike&product_id=<?php echo $p->id; ?>&href=index&actionLike=<?php echo $accion_like;?>" class="btn btn-labeled btn-sm btn-primary" title="A&ntilde;adir al carrito">
        <span class="btn-label"><i class="glyphicon glyphicon-star"></i></span><?php echo $Accion_like_titulo?></a><br>
        <?php }    ?>
    <a href="index.php?view=producto&product_id=<?php echo $p->id; ?>">Detalles</a>
                </center>

  </div>
<?php endif; ?>
<?php $n++; endfor; ?>
  </div>
<?php endfor; ?>
<?php else:?>
  <div class="jumbotron">
  <h2>No hay productos destacados.</h2>
  <p>En la pagina principal solo se muestran productos marcados como destacados.</p>
  </div>
<?php endif; ?>



  </div>

  </div>


  </div>
  </section>
