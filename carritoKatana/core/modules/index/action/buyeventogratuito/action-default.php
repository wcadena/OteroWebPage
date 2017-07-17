<?php
// print_r($_SESSION);
if(!empty($_GET) && isset($_SESSION["client_id"])){
    $buy = new BuyData();

    $alphabeth ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ1234567890_-";
    $code = "";
    $k = "";
    for($i=0;$i<11;$i++){
        $code .= $alphabeth[rand(0,strlen($alphabeth)-1)];
        $k .= $alphabeth[rand(0,strlen($alphabeth)-1)];
    }

    $buy->k = $k;
    $buy->code = $code;
    $buy->coupon_id = isset($_SESSION["coupon"])?$_SESSION["coupon"]:"NULL";
    $buy->client_id = $_SESSION["client_id"];
    $buy->paymethod_id= 4;//EventoFREE;
    $buy->status_id= 1;
    $b = $buy->add();
    /*echo "<code><pre>";
    print_r($b );
    echo "</pre></code>";*/
    $p = new BuyProductData();
    $p->buy_id = $b[1];
    $p->product_id = $_REQUEST['product_id'];
    $p->q = 1;
    $p->add();



// agregamos un history

    $h = new HistoryData();
    $h->buy_id = $b[1];
    $h->status_id=1;
    $h->add();

    unset($_SESSION["cart"]);
    unset($_SESSION["coupon"]);

    Core::redir("index.php?view=client");
}else{
    echo "Logueese Primerito";
    Core::redir("index.php?view=clientaccess");


}
?>