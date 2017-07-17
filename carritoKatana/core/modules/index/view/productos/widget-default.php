<?php 
if(isset($_GET["cat"])){
$cat = CategoryData::getByPreffix($_GET["cat"]);
$products = ProductData::getPublicsByCategoryId($cat->id);
}else if(isset($_GET["opt"])){
if($_GET["opt"]=="news"){
$products = ProductData::getNews();
}
else if($_GET["opt"]=="offers"){
$products = ProductData::getOffers();
}

}else if(isset($_GET["act"]) && $_GET["act"]=="search"){
$products = ProductData::getLike($_GET["q"]);

}
$coin = ConfigurationData::getByPreffix("general_coin")->val;
$img_default = ConfigurationData::getByPreffix("general_img_default")->val;

 ?>
<section>
  <div class="container">

  <div class="row">

  <div class="col-md-12">
    <div style="background:#333;font-size:25px;color:white;padding:5px;"><?php 
    if(isset($_GET["act"]) && $_GET["act"]!=""){ echo "Busqueda: ".$_GET["q"]; }else { echo $cat->name; } ?></div>
<br>
<?php

$nproducts = count($products);
$filas = $nproducts/3;
$extra = $nproducts%3;
if($filas>1&& $extra>0){ $filas++; }
$n=0;
?>
<?php if($nproducts>0):?>
<?php for($i=0;$i<$filas;$i++):?>
  <div class="row">
<?php for($j=0;$j<3;$j++):
$p=null;
if($n<$nproducts){
$p = $products[$n];
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
<h3 class="text-center text-primary"><?php echo $coin; ?> <?php echo number_format($p->price,2,".",","); ?></h3>
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
            <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>Adquirir</a>
    <?php }else {
        if(!isset($_SESSION["client_id"])){?>
        <a href="index.php?view=clientaccess" class="btn btn-labeled btn-sm btn-primary" title="Like - me gusta ">
            <span class="btn-label"><i class="glyphicon glyphicon-star"></i></span>Me Gusta </a>
    <?php }}?>
<br>
<?php else:?>
<center><a href="javascript:void()" class="btn btn-labeled btn-sm btn-success" title="Ya esta en el carrito">
                <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>Ya esta agregado</a>
<br>
<?php endif; ?><br>
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
        <a href="index.php?action=addtoLike&product_id=<?php echo $p->id; ?>&href=cat&actionLike=<?php echo $accion_like;?>" class="btn btn-labeled btn-sm btn-primary" title="A&ntilde;adir al carrito">
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
  <h2>No hay productos</h2>
  <p>No hay productos por mostrar</p>
  </div>
<?php endif;?>


  </div>
  </div>


  </div>
  </section>
