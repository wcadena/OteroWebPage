<?php
if(isset($_SESSION["client_id"])):
    $client = ClientData::getById($_SESSION["client_id"]);
endif;
$product = ProductData::getById($_GET["product_id"]);
$url = "storage/products/$product->image";
$coin = ConfigurationData::getByPreffix("general_coin")->val;
?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Button trigger modal -->
            <h2><?php echo $product->name;  ?> <small>Editar</small></h2>
            <?php
            // print_r($_SESSION);
            if(isset($_SESSION["product_updated"])):?>
                <p class="alert alert-info"><i class="fa fa-check"></i> Evento Actualizado Exitosamente</p>
                <?php
                unset($_SESSION["product_updated"]);
            endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-pencil"></i> Editar Evento
                </div>
                <div class="panel-body ">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="index.php?action=updateevento">
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Codigo:</label>
                            <div class="col-lg-2">
                                <input type="hidden" class="form-control" name="code" value="<?php echo $product->code; ?>" placeholder="Codigo">
                                <label  class="col-lg-2 control-label"> <?php echo $product->code; ?></label>
                            </div>

                            <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" value="<?php echo $product->name; ?>" placeholder="Nombre del Evento">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 control-label">Descripcion</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="inputPassword1" placeholder="Descripcion" rows="6" name="description"><?php echo $product->description; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Precio</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><?php echo $coin; ?></span>
                                    <input type="number" step="0.01" class="form-control" placeholder="Precio" value="<?php echo $product->price; ?>" required name="price">
                                </div>    </div>
                        </div>
                        <?php if( $product->image!="" && file_exists($url)):?>
                            <img src="<?php echo $url; ?>" class="img-responsive">
                        <?php endif; ?>
                        <br>  <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Imagen</label>
                            <div class="col-lg-10">
                                <input type="file" name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_public" <?php if($product->is_public){ echo "checked";} ?> > Es Visible
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="in_existence" <?php if($product->in_existence){ echo "checked";} ?>> Publicar
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_featured" <?php if($product->is_featured){ echo "checked";} ?>> Evento destacado
                                    </label>
                                </div>
                            </div>

                        </div>
                        <?php /**?><div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Unidad</label>
                            <div class="col-lg-10">
                                <?php
                                $categories = UnitData::getAllforEventos();
                                if(count($categories)>0):?>
                                    <select name="unit_id" class="form-control">
                                        <option value="">-- SELECCIONE UNIDAD --</option>
                                        <?php foreach($categories as $cat):?>
                                            <option value="<?php echo $cat->id; ?>" <?php if($product->unit_id==$cat->id){ echo "selected";} ?>><?php echo $cat->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                <?php endif; ?>

                            </div>
                        </div><?php **/?>
                        <input  type="hidden" name="unit_id"  id="unit_id" value="1"  />
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
                            <div class="col-lg-10">
                                <?php
                                $categories = CategoryData::getEventos();
                                if(count($categories)>0):?>
                                    <select name="category_id" class="form-control">
                                        <option value="">-- SELECCIONE EVENTO --</option>
                                        <?php foreach($categories as $cat):?>
                                            <option value="<?php echo $cat->id; ?>" <?php if($product->category_id==$cat->id){ echo "selected";} ?>><?php echo $cat->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!--WCADENA -->
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 control-label">Fecha Inicio de Evento</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="DATETIME-LOCAL" name="fecha_ini_evento"  id="fecha_ini_evento" placeholder="yyyy-mm-dd hh:mm:ss"  value="<?php echo $product->fecha_ini_evento; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 control-label">Fecha Fin de Evento</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="DATETIME-LOCAL" name="fecha_fin_evento" id="fecha_fin_evento" placeholder="yyyy-mm-dd hh:mm:ss"  value="<?php echo $product->fecha_fin_evento; ?>" />

                                </div>
                        </div>



                        <input class="form-control" type="hidden" name="client_id"  id="client_id" value="<?php echo $client->id;?>"  />

                        <!--WCADENA -->

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-6">
                                <button type="submit" class="btn btn-success btn-block">Actualizar Evento</button>
                            </div>
                            <div class="col-lg-4">
                                <button type="reset" class="btn btn-default btn-block">Limpiar Campos</button>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET["product_id"];?>">
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
<br><br>