
<?php
$user_name = isset($_SESSION["client_id"]) ? $_SESSION["client_id"] : '';
//echo "*****************************************++++++------".$user_name;
if(!empty($user_name)){
    //echo "ingresa";
    $like = new LikeproductData();
    $like->client_id=$user_name;
    $like->product_id=$_GET["product_id"];
    if($_GET["actionLike"]=="add"){
        $like->add();
    }else if($_GET["actionLike"]=="del"){
        $like->delByClieIdProductid();
    }
}else{
    //http://katana.rgzlec.com/carritoKatana/index.php?view=clientaccess
    $_SESSION['error']='Para dar Like debe estar Logueado';
    Core::redir("index.php?view=clientaccess");
}
//print_r($products);

if($_GET["href"]=="product") {
    Core::redir("index.php?view=producto&product_id=" . $_GET["product_id"]);
}else if($_GET["href"]=="index"){
    Core::redir("index.php");
}else if($_GET["href"]=="indexCliente"){
    Core::redir("index.php?view=client");
}else if($_GET["href"]=="cat"){
    $p =  ProductData::getById($_GET["product_id"]);
    $cat = CategoryData::getById($p->category_id);
    Core::redir("index.php?view=productos&cat=".$cat->short_name);
}




?>