<?php 
	include("../queries/query.php"); 

    $query = "SELECT compra_id FROM compra ORDER BY compra_id DESC LIMIT 1";
    $compra_id = query_table_campo($query, "compra_id") + 1;
    setcookie("compra_id", $compra_id, time()+60*60, "/");
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Compra - FastERP</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="css/styles.css" />

		<!-- // <script type="text/javascript" src="js/vendor/modernizr.custom.47114.js"></script> -->

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<header class="Header">
			<nav class="Menu">
				<div class="Menu-logo">
					<figcaption class="Menu-logoContainer">
						<img src="img/logo.png" width="50px" class="Menu-logo-image" alt="FastERP">
					</figcaption>
				</div>
				<ul class="Menu-list">
					<li class="Menu-item"><a href="homepage.php" class="Menu-link">General</a></li>
					<li class="Menu-item"><a href="ventas.php" class="Menu-link">Ventas</a></li>
					<li class="Menu-item"><a href="compras.php" class="Menu-link active">Compras</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Inventario</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Informe</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Ayuda</a></li>
				</ul>
				<div class="Menu-logoUsuario">
					<figcaption class="Menu-logoContainer">
						<img src="img/user.png" width="50px" class="Menu-logoImage" alt="FastERP">
						<figcaption class="Menu-logoDescription"><a href="#">Usuario</a></figcaption>
					</figcaption>
				</div>
			</nav>
		</header>


		<section class="Container Container-1x">
			<h1 class="title">Registro de Compra</h1>
			<div id="bloquear">
			<form action="javascript: fn_agregar_compra();" method="post" id="frm_compra_agregar">
				<article class="Container-item">
					<div class="Container-item-left">
						<input type="hidden" name="usuario_id" id="usuario_id" value="1" />
						<div class="Form-inputGroup">
							<div class="inline-block" id="div_listar_proveedor">
								
							</div> <!-- Lista de proveedores AJAX (main.js + proveedor_form_agregar + proveedor_agregar + proveedor_listar) -->
							<div id="div_oculto_proveedor" style="display: none;"></div> <!-- Pop Up agregar proveedor -->
						    <a class="btn btn-blue" id="nuevoProveedor">Nuevo Proveedor</a>
						</div>
						

						<div class="Form-inputGroup inline-block">
						    <label for="almacen_id" class="Form-label">Almacen</label>
						     <select class="Form-inputText-small Form-select" name="almacen_id" id="almacen_id">
						    	<?php query_table_option("SELECT * FROM almacen ORDER BY almacen", 'almacen_id', 'almacen'); ?>
						    </select>
						</div>
						<div class="Form-inputGroup inline-block">				    
						    <label for="moneda_id" class="Form-label">Moneda</label>
						    <select class="Form-inputText-small Form-select" name="moneda_id" id="moneda_id">
						    	<option value="1">Soles</option>
						    	<option value="2">Dolares</option>
						    </select>
						</div>
						<div class="Form-inputGroup">
						    <label for="referencia" class="Form-label">Referencia</label>
						    <input type="text" class="Form-inputText-small" size="40" name="referencia" id="referencia" value="" placeholder="Referencia" />
						</div>
						<br>
						<div class="Form-inputGroup">
							<div class="inline-block" style="display: none;" id="div_listar_producto"></div> <!-- Lista de productos AJAX (main.js + producto_form_agregar + producto_agregar + producto_listar) -->
							<div id="div_oculto_producto" style="display: none;"></div> <!-- Pop Up agregar producto -->
						    <button class="btn btn-blue" id="nuevoProducto">Agregar Nuevo Producto</button>
						</div>
					</div>
					<div class="Container-item-right">
						<div class="checkbox">
					        <label>
					        	<input type="checkbox" name="creado" name="creado" /> Creado
				        	</label>
					        <label>
					        	<input type="checkbox" name="recibido" name="recibido" /> Recibido
				        	</label>
					    </div>
						<div class="Form-inputGroup">
						    <label for="fecha" class="Form-label">
						    	Fecha 
						    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						    </label>
						    <input type="text" class="Form-inputText-small" name="fecha" id="fecha" min="2015-01-01" value="<?php echo date('Y-m-d'); ?>" />
						    <span class="Form-icon icon-checkmark"></span>
						</div>

						<div class="Form-inputGroup">
						    <label for="fecha_pago" class="Form-label">Fecha de pago</label>
						    <input type="text" class="Form-inputText-small" name="fecha_pago" id="fecha_pago" min="2015-01-01" value="<?php echo date('Y-m-d'); ?>" />
						    <span class="Form-icon icon-checkmark"></span>
						</div>
					</div>
				</article>
				
				<div class="clear"></div>

				<article class="Container-item">
					<button type="submit" class="btn btn-green btn-lg btn-lg right" id="nuevoCompraDet">Agregar</button>
					<div id="div_compra_agregar"></div> <!-- Insertando datos de compra -->
					<div id="div_listar_compra_det"></div> <!-- Lista de COMPRA DETALLES AJAX (main.js + compra_det_form_agregar + compra_det_agregar + compra_det_listar) -->
					<div id="div_oculto_compra_det" style="display: none;"></div> <!-- Pop Up agregar COMPRA DETALLES -->
				</article>
			</form>


			<article class="Container-item">
				<div class="Container-item-left">
					<div class="Form-inputGroup">
						<textarea class="Form-inputText-small Form-textarea text-left" name="notas" id="notas" cols="80" rows="20" placeholder="Notas y Observaciones">
							Notas y Observaciones
						</textarea>
					</div>
				</div>
				<div class="Container-item-right">
					<div id="div_listar_compra_precios"></div> <!-- Lista precios (main.js + compra_precio_form_agregar + compra_precio_agregar + compra_precio_listar) -->
					<div id="div_oculto_compra_precios" style="display: none;"></div> <!-- Pop Up agregar COMPRA PRECIOS -->
				</div>
			</article>
			</div>

			<article class="Container-item">
				<div class="Container-item-left">
					<div class="Form-inputGroup">
						<input type="checkbox" id="finalizar" class="switch" /> 
					    <label for="finalizar" class="Form-label">Finalizar</label>
					</div>
				</div>
			</article>

			<div class="clear"></div>

		</section>

		<footer class="Footer">
			<p>Control Group SAC Derechos de autor ® 2015</p>
		</footer>

  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

  
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/validate.min.js"><\/script>')</script>


        <script language="javascript" type="text/javascript" src="js/vendor/table/jquery-1.3.2.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/vendor/table/jquery.blockUI.js"></script>
        <script language="javascript" type="text/javascript" src="js/vendor/table/jquery.validate.1.5.2.js"></script>

        <script src="js/main.js"></script>
        <script type="text/javascript">
        	fn_buscar_compra_det();
        	fn_buscar_proveedor();
        	fn_buscar_producto();
        </script>
    </body>
</html>