<?php
if(!empty($_POST)){
	$cat =  CategoryData::getById($_POST["category_id"]);
	$cat->name = $_POST["name"];
	$cat->short_name = $_POST["short_name"];
	$cat->tipocategoria = $_POST["tipocategoria"];
	if(isset($_POST["is_active"])){ $cat->is_active=1;}else{$cat->is_active=0;}
	$cat->update();

	Core::redir("index.php?view=categories");
}
?>