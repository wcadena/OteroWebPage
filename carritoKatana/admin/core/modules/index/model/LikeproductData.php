<?php
class LikeproductData {
    public static $tablename = "likeproduct";


    public function LikeproductData(){
        $this->client_id = "";
        $this->product_id = "";
        $this->created_at = "NOW()";
    }

   
    public function getClient(){ return ClientData::getById($this->client_id);}


    public function add(){
        $sql = "insert into ".self::$tablename." (client_id,product_id,created_at) ";
        $sql .= "value ($this->client_id,$this->product_id,$this->created_at)";
        return Executor::doit($sql);
    }

    public static function delById($id){
        $sql = "delete from ".self::$tablename." where id=$id";
        Executor::doit($sql);
    }
    public function delByClieIdProductid(){
        $sql = "delete from ".self::$tablename." where client_id=$this->client_id and product_id=$this->product_id";
        Executor::doit($sql);
    }
    public function del(){
        $sql = "delete from ".self::$tablename." where id=$this->id";
        Executor::doit($sql);
    }

// partiendo de que ya tenemos creado un objecto BuyData previamente utilizamos el contexto
    public function update(){
        $sql = "update ".self::$tablename." set client_id=$this->client_id,product_id=$this->product_id where id=$this->id";
        Executor::doit($sql);
    }



    public static function getById($id){
        $sql = "select * from ".self::$tablename." where id=$id";
        $query = Executor::doit($sql);
        return Model::one($query[0],new BuyData());
    }



    public static function getAll(){
        $sql = "select * from ".self::$tablename." order by created_at desc";
        $query = Executor::doit($sql);
        return Model::many($query[0],new BuyData());
    }






    public static function getAllByClientId($id){
        $sql = "select * from ".self::$tablename." where client_id=$id order by created_at desc";
        $query = Executor::doit($sql);
        return Model::many($query[0],new BuyData());
    }
    public static function getAllByClientIdYProductoId($id,$product_id){
        $sql = "select * from ".self::$tablename." where client_id=$id and product_id = $product_id order by created_at desc";
        $query = Executor::doit($sql);
        //echo($sql);
        return Model::many($query[0],new BuyData());
    }

    public static function getByBuyClientIdProductos($id){
        $sql = "SELECT likeproduct.id,
       product.name,
       product.id AS product_id,
       likeproduct.created_at
  FROM (".ProductData::$tablename." product
        INNER JOIN ".CategoryData::$tablename." category
           ON (product.category_id = category.id))
       INNER JOIN ".self::$tablename." likeproduct
          ON (likeproduct.product_id = product.id)
 WHERE (likeproduct.client_id = $id AND category.tipocategoria = 1)";
        //echo $sql;
        $query = Executor::doit($sql);
        return Model::many($query[0],new ProductData());
    }
    public static function getByBuyClientIdEventos($id){
       $sql = "SELECT likeproduct.id,
       product.name,
       product.fecha_ini_evento,
       product.fecha_fin_evento,
       product.id AS product_id,
       likeproduct.created_at
  FROM (".ProductData::$tablename." product
        INNER JOIN ".CategoryData::$tablename." category
           ON (product.category_id = category.id))
       INNER JOIN ".self::$tablename." likeproduct
          ON (likeproduct.product_id = product.id)
 WHERE (likeproduct.client_id = $id AND category.tipocategoria = 2)";
        //echo $sql;
        $query = Executor::doit($sql);
        return Model::many($query[0],new ProductData());
    }



}

?>