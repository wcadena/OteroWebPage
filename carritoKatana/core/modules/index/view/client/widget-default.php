<?php if(isset($_SESSION["client_id"])):
$client = ClientData::getById($_SESSION["client_id"]);
$coin_symbol = ConfigurationData::getByPreffix("general_coin")->val;
$img_default = ConfigurationData::getByPreffix("general_img_default")->val;
?>
	<link href='admin/res/css/fullcalendar.min.css' rel='stylesheet' />
	<link href='admin/res/css/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='admin/res/js/moment.min.js'></script>
	<script src='admin/js/jquery.min.js'></script>
	<script src='admin/res/js/moment.min.js'></script>
<div class="container">
<div class="row">

<div class="col-md-12">
<h3>Bienvenido, <?php echo $client->name." ".$client->lastname; ?></h3>
</div>

</div>
</div>
<?php

$buys = BuyData::getAllByClientid($_SESSION["client_id"]);
	$likes =      LikeproductData::getByBuyClientIdProductos($_SESSION["client_id"]);
	$likesEventos = LikeproductData::getByBuyClientIdEventos($_SESSION["client_id"]);
?>

	<!-- TABS WCADENA  ini-->
	<div class="container">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mi perfil</a></li>
			<?php /**?><li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Mis Compras</a></li><?php **/?>
			<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Mis Colaboraciones</a></li>
			<li role="presentation" class="active" ><a href="#eventos" aria-controls="eventos" role="tab" data-toggle="tab">Mis eventos</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane " id="home">
				<!-- calendario12ss4-->
				<h1>Mi Perfil</h1>
				<?php if(count($likes)>0):?>
					<h1>Productos que me gustan</h1>
					<table class="table table-bordered">
						<thead>
						<th>Productos</th>
						<th>Acción</th>
						</thead>
						<?php foreach($likes as $like):
							$discount = 0;
							?>
							<tr>
								<td><?php echo $like->name; ?>
								<?php
								$img = "admin/storage/products/".$like->image;
								if($like->image==""){
									$img=$img_default;
								}
								?>
									<img src="<?php echo $img; ?>"  style="width:120px;height:120px;">
								</td>

								<td>
									<a href="index.php?action=addtoLike&product_id=<?php echo $like->product_id; ?>&href=indexCliente&actionLike=del" class="btn btn-labeled btn-sm btn-primary">
										<span class="btn-label"><i class="glyphicon glyphicon-star"></i></span>No me gusta</a>
									<a href="index.php?view=producto&product_id=<?php echo $like->product_id; ?>" class="btn btn-labeled btn-sm btn-primary">
										<span class="btn-label"><i class="glyphicon glyphicon-share-alt"></i></span>Detalles</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				<?php else:?>
					<div class="jumbotron">
						<h2>No hay Productos que te Gustan</h2>
					</div>
				<?php endif; ?>
				<!----------------------------------------------------------->
				<?php if(count($likesEventos)>0):?>
					<h1>Eventos que me gustan</h1>
					<table class="table table-bordered">
						<thead>
						<th>Eventos</th>
						<th>Acción</th>
						</thead>
						<?php foreach($likesEventos as $like):
							$discount = 0;
							?>
							<tr>
								<td><?php echo $like->name; ?>
									<?php
									$img = "admin/storage/products/".$like->image;
									if($like->image==""){
										$img=$img_default;
									}
									?>
									<img src="<?php echo $img; ?>"  style="width:120px;height:120px;"></td>
								<td>
									<a href="index.php?action=addtoLike&product_id=<?php echo $like->product_id; ?>&href=indexCliente&actionLike=del" class="btn btn-labeled btn-sm btn-primary">
										<span class="btn-label"><i class="glyphicon glyphicon-star"></i></span>No me gusta</a>
									<a href="index.php?view=producto&product_id=<?php echo $like->product_id; ?>" class="btn btn-labeled btn-sm btn-primary">
										<span class="btn-label"><i class="glyphicon glyphicon-share-alt"></i></span>Detalles</a>
								</td>
							</tr>

						<?php endforeach; ?>
					</table>
				<?php else:?>
					<div class="jumbotron">
						<h2>No hay Productos que te Gustan</h2>
					</div>
				<?php endif; ?>
				<!-- calendario12ss4-->
			</div>
			<?php /**?><div role="tabpanel" class="tab-pane" id="profile">
				<!--jkio1233-->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Mis Compras</h2>
							<?php if(count($buys)>0):?>
								<table class="table table-bordered">
									<thead>
									<th></th>
									<th>Compra</th>
									<th>Subtotal</th>
									<th>Descuento</th>
									<th>Total</th>
									<th>Estado</th>
									<th>Metodo de pago</th>
									<th>Fecha</th>
									</thead>
									<?php foreach($buys as $buy):
										$discount = 0;
										?>
										<tr>
											<td><a href="index.php?view=openbuy&code=<?php echo $buy->code; ?>" class="btn btn-default btn-xs">Detalles</a></td>
											<td>#<?php echo $buy->id; ?></td>
											<td><?php echo $coin_symbol; ?> <?php echo number_format($buy->getTotal(),2,".",","); ?></td>
											<td><?php echo $coin_symbol; ?>
												<?php if($buy->coupon_id!=null){
													$coupon = CouponData::getById($buy->coupon_id);
													$discount = $coupon->val;
													echo number_format($discount,2,".",",");
												}else{
													echo number_format($discount,2,".",",");

												}
												?>
											</td>
											<td><?php echo $coin_symbol; ?> <?php echo number_format($buy->getTotal()-$discount,2,".",","); ?></td>
											<td><?php echo $buy->getStatus()->name; ?></td>
											<td><?php echo $buy->getPaymethod()->name; ?></td>
											<td><?php echo $buy->created_at; ?></td>
										</tr>

									<?php endforeach; ?>
								</table>
							<?php else:?>
								<div class="jumbotron">
									<h2>No hay compras</h2>

								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<!--jkio1233-->

			</div><?php **/?>
			<div role="tabpanel" class="tab-pane" id="messages">
				<!--asd1234-->
				<?php /***wcadena aumentado ************************/?>

				<!-- Main Content -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a  href="index.php?view=newproductos" class="pull-right btn-sm btn btn-default">Agregar Producto</a>
							<a  href="index.php?view=neweventos" class="pull-right btn-sm btn btn-default">Agregar Evento</a>
							<!-- Button trigger modal -->


							<h2>Colaboraciones</h2>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-th-list"></i> Productos
								</div>
								<div class="widget-body medium no-padding">
									<?php
									$categories = ProductData::getByClient($client->id);
									if(count($categories)>0):?>
										<div class="table-responsive">
											<table class="table table-bordered">
												<tbody>
												<thead>
												<th>Nombre</th>
												<th>Visible</th>
												<th>Destacado</th>
												<th>Existencia</th>
												<th></th>
												</thead>
												<?php foreach($categories as $cat):?>
													<tr>
														<td><?php echo $cat->name; ?></td>
														<td style="width:90px;"><center><?php if($cat->is_public):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
														<td style="width:90px;"><center><?php if($cat->is_featured):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
														<td style="width:90px;"><center><?php if($cat->in_existence):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
														<td style="width:105px;">
															<?php $vinculo3ser='editproducto';
															if($cat->category_id==2){//SITE_ID_EVENT//wcadena
																$vinculo3ser='editevento';
															}?>
															<a href="index.php?view=producto&product_id=<?php echo $cat->id; ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-link"></i></a>
															<a href="index.php?view=<?php echo $vinculo3ser;?>&product_id=<?php echo $cat->id; ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
															<?php /**?><a href="index.php?action=delproducto&product_id=<?php echo $cat->id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a><?php */?>
														</td>
													</tr>
												<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									<?php else:?>
										<div class="panel-body">
											<p class="alert alert-warning">No hay productos, puedes empezar agregando tu lista de productos.</p>
										</div>
									<?php endif; ?>

								</div>
							</div>
						</div>

					</div>
				</div>
				<!--eventos-->
				<!--asd1234-->
			</div>
			<div role="tabpanel" class="tab-pane active" id="eventos">
				<style>

					body {
						margin: 40px 10px;
						padding: 0;
						font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
						font-size: 14px;
					}

					#calendar {
						max-width: 900px;
						margin: 0 auto;
					}

				</style>
				<?php
				//$categories = ProductData::getByBuyClientIdEventos($_SESSION["client_id"]);
				$categories = LikeproductData::getByBuyClientIdEventos($_SESSION["client_id"]);
				if(count($categories)>0):?>
					<script>

						$(document).ready(function() {

							$('#calendar').fullCalendar({
								header: {
									left: 'prev,next today',
									center: 'title',
									right: 'month,basicWeek,basicDay'
								},
								defaultDate: '<?php echo date("Y-m-d")?>2016-12-12',
								navLinks: true, // can click day/week names to navigate views
								editable: true,
								eventLimit: true, // allow "more" link when too many events
								events: [
									<?php foreach($categories as $cat):?>

									<?php if(true)://SITE_ID_EVENT?>
									{
										title: '<?php echo $cat->name; ?>',
										start: '<?php echo $cat->fecha_ini_evento; ?>',
										end: '<?php echo $cat->fecha_fin_evento; ?>',
										constraint: 'availableForMeeting' // defined below
									},
									<?php endif; ?>
									<?php endforeach; ?>

								]
							});

						});

					</script>
					<h1>Calendario de Actividades</h1>
					<div id='calendar'></div>
					<div style='clear:both'></div>


				<?php else:?>
					<div class="panel-body">
						<p class="alert alert-warning">No hay Eventos, puedes empezar agregando tu lista de eventos.</p>
					</div>
				<?php endif; ?>

			</div>
		</div>

	</div>
	<!-- TABS WCADENA  fin-->

	<!-- JavaScript -->
	<!--wcadena ini-->
	<script src='js/moment.min.js'></script>
	<!--wcadena fin-->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="res/bootstrap3/js/bootstrap.min.js"></script>

	<!--wcadena ini-->
	<script src='js/fullcalendar.min.js'></script>
	<!--wcadena fin-->

<?php endif; ?>

