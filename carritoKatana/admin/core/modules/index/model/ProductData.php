<?php
class ProductData {
	public static $tablename = "product";


	public function ProductData(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->link = "";
		$this->category_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
		//wcadena
		$this->fecha_ini_evento = "NOW()";
		$this->fecha_fin_evento = "NOW()";
		$this->client_id = "-1";

	}

	public function getUnit(){ return UnitData::getById($this->unit_id);}

	public function add(){
		if($this->fecha_ini_evento==0||$this->fecha_ini_evento==''){
			$this->fecha_ini_evento='0000-00-00 00:00:00';
		}
		if($this->fecha_fin_evento==0||$this->fecha_fin_evento==''){
			$this->fecha_fin_evento='0000-00-00 00:00:00';
		}
		$sql = "insert into ".self::$tablename." (short_name,code,name,description,image,price,link,category_id,unit_id,is_public,in_existence,is_featured,created_at,fecha_ini_evento,fecha_fin_evento,client_id) ";
		$sql .= "value (\"$this->short_name\",\"$this->code\",\"$this->name\",\"$this->description\",\"$this->image\",\"$this->price\",\"$this->link\",$this->category_id,$this->unit_id,$this->is_public,$this->in_existence,$this->is_featured,$this->created_at
		,\"$this->fecha_ini_evento\"
		,\"$this->fecha_fin_evento\"
		,\"$this->client_id\")";
		//echo $sql;
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ProductData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set code=\"$this->code\",name=\"$this->name\",description=\"$this->description\",link=\"$this->link\",price=\"$this->price\",in_existence=\"$this->in_existence\",is_public=\"$this->is_public\",is_featured=\"$this->is_featured\",unit_id=\"$this->unit_id\",category_id=\"$this->category_id\",fecha_ini_evento=\"$this->fecha_ini_evento\",fecha_fin_evento=\"$this->fecha_fin_evento\" ,client_id=\"$this->client_id\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProductData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}
	public static function getAllProductos(){
		$sql = "SELECT product.*
  FROM ".self::$tablename." product
       INNER JOIN ".CategoryData::$tablename." category
          ON (product.category_id = category.id) 
          where category.tipocategoria = 1 order by product.created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}
	public static function getAllEventos(){
		$sql = "SELECT product.*
  FROM ".self::$tablename." product
       INNER JOIN ".CategoryData::$tablename." category
          ON (product.category_id = category.id) 
          where category.tipocategoria = 2 order by product.created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getByClient($id){
		$sql = "select * from ".self::$tablename." where client_id=$id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getPublicsByCategoryId($id){
		$sql = "select * from ".self::$tablename." where category_id=$id and is_public=1 order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function get4News(){
		$sql = "select * from ".self::$tablename." where is_new=1 and is_public=1 order by created_at desc limit 4";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function get4Offers(){
		$sql = "select * from ".self::$tablename." where is_offer=1 and is_public=1 order by created_at desc limit 4";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getNews(){
		$sql = "select * from ".self::$tablename." where is_new=1 and is_public=1 order by created_at desc limit 4";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getFeatureds(){
		$sql = "select * from ".self::$tablename." where is_featured=1 and is_public=1 order by created_at desc limit 6";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%' or description like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getByBuyClientId($id){
		$sql = "SELECT buy_product.product_id, product.*
  FROM (".BuyProductData::$tablename." buy_product
        INNER JOIN ".BuyData::$tablename." buy ON (buy_product.buy_id = buy.id))
       INNER JOIN ".self::$tablename." product
          ON (buy_product.product_id = product.id) where buy.client_id = $id";
		//echo $sql;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}
	public static function getByBuyClientIdProductos($id){
		$sql = "SELECT buy_product.product_id, product.*
  FROM ((".BuyProductData::$tablename." buy_product
         INNER JOIN ".BuyData::$tablename." buy ON (buy_product.buy_id = buy.id))
        INNER JOIN ".self::$tablename." product
           ON (buy_product.product_id = product.id))
       INNER JOIN ".CategoryData::$tablename." category
          ON (product.category_id = category.id)
 WHERE buy.client_id = $id and category.tipocategoria =1";
		//echo $sql;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}
	public static function getByBuyClientIdEventos($id){
		$sql = "SELECT buy_product.product_id, product.*
  FROM ((".BuyProductData::$tablename." buy_product
         INNER JOIN ".BuyData::$tablename." buy ON (buy_product.buy_id = buy.id))
        INNER JOIN ".self::$tablename." product
           ON (buy_product.product_id = product.id))
       INNER JOIN ".CategoryData::$tablename." category
          ON (product.category_id = category.id)
 WHERE buy.client_id = $id and category.tipocategoria =2";
		//echo $sql;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

}

?>