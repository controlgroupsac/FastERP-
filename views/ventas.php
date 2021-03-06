<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Ventas - FastERP</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="css/styles.css" />

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
					<li class="Menu-item"><a href="ventas.php" class="Menu-link active">Ventas</a></li>
					<li class="Menu-item"><a href="compras.php" class="Menu-link">Compras</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Inventario</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Informe</a></li>
					<li class="Menu-item"><a href="#" class="Menu-link">Ayuda</a></li>
				</ul>
				<div class="Menu-logoUsuario">
					<figcaption class="Menu-logoContainer">
						<img src="img/user.png" width="50px" class="Menu-logoImage" alt="FastERP">
						<figcaption class="Menu-logoDescription"><a href="#">D.Rojas</a></figcaption>
					</figcaption>
				</div>
			</nav>
		</header>


		<section class="Container Container-1x">
			<h1 class="title">Venta</h1>
			<article class="Container-item">
				<div class="Container-item-left">
					<div class="Form-inputGroup">			    
					    <label for="punto" class="Form-label text-sm">Punto de Venta</label>
					    <select class="Form-inputText-small Form-select" id="punto">
					    	<option value="">PEN</option>
					    	<option value="">USD</option>
					    </select>
					</div>
					<div class="Form-inputGroup">			    
					    <label for="ordenAbierta" class="Form-label text-sm">Ordenes Abiertas</label>
					    <select class="Form-inputText-small Form-select" id="ordenAbierta">
					    	<option value="">000125</option>
					    	<option value="">000126</option>
					    	<option value="">000131</option>
					    </select>
					</div>
				</div>
				<div class="Container-item-right">
					<div class="Form-inputGroup">
					    <label for="#" class="Form-label text-sm">jue 1/1/2015</label> 
					    <label for="#" class="Form-label text-sm radius"><a href="#">?</a></label> 
					    <button class="btn btn-gray btn-sm">Cierre de Caja</button> 
					</div>
				</div>
			</article>

			<div class="clear"></div>

			<article class="Container-item">
				<div class="Container-item-left col-6x">
					<div class="Form-inputGroup block">
					    <input type="text" class="Form-inputText-small" size="40" id="mesa" placeholder="Mesa" />
					    <span class="Form-icon icon-checkmark"></span>
					</div>
					<div class="Form-inputGroup block">
					    <input type="text" class="Form-inputText-small" size="40" id="cliente" placeholder="cliente" />
					    <span class="Form-icon icon-checkmark"></span>
						<button class="btn btn-gray btn-small" id="nuevoCliente">Nuevo Cliente</button>
					</div>
					
					<table class="Table Table-striped Table-bordered">
						<thead>
							<tr>
								<th width="50%">Nombre <span class="icon-embed"></span></th>
								<th width="15%">Cant. <span class="icon-embed"></span></th>
								<th width="17%">Desc.<span class="icon-embed"></span></th>
								<th width="18%">Precio <span class="icon-embed"></span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="checkbox">
								        <label>
								        	<input type="checkbox" name="estado" /> Coca Cola Lt Ret
							        	</label>
								    </div>
								</td>
								<td>1</td>
								<td>0%</td>
								<td>12.00</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
					<button class="btn btn-gray btn-small inline-block">Eliminar</button>
					<button class="btn btn-gray btn-small inline-block">+</button>
					<button class="btn btn-gray btn-small inline-block">Editar</button>
					<button class="btn btn-gray btn-small inline-block">-</button>
					<button class="btn btn-gray btn-small inline-block">Limpiar</button>
				</div>

				<div class="Container-item-right col-4x padding-left">
					<div class="Form-inputGroup">
					    <input type="text" class="Form-inputText-small col-7x" id="mesa" placeholder="Código o nombre del producto" />
					    <span class="Form-icon icon-checkmark"></span>
					</div>
					<div class="Container-listProducts">
						<div class="Container-categories left">
							<div class="Container-categoriesItem">
								<figure><a href="#"><img src="img/products/categories/cervezas.jpg" class="img img-categoriesItem img-responsive img-rounded"  alt="cervezas"></a></figure>
							</div>
							<div class="Container-categoriesItem">
								<figure><a href="#"><img src="img/products/categories/otras-bebidas.jpg" class="img img-categoriesItem img-responsive img-rounded" alt="bebidas"></a></figure>
							</div>
						</div>
						<div class="Container-products right">
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/barena.jpg" class="img img-productsItem img-responsive img-rounded" alt="barena"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/cristal.jpg" class="img img-productsItem img-responsive img-rounded" alt="cristal"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/cusquena.jpg" class="img img-productsItem img-responsive img-rounded" alt="cusquena"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/arequipena.png" class="img img-productsItem img-responsive img-rounded"  alt=""></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/pilsen-callao.jpg" class="img img-productsItem img-responsive img-rounded" alt="callao"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/san-juan.jpg" class="img img-productsItem img-responsive img-rounded" alt="juan"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/trujillo.jpg" class="img img-productsItem img-responsive img-rounded" alt="trujillo"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/barena.jpg" class="img img-productsItem img-responsive img-rounded" alt="barena"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/cristal.jpg" class="img img-productsItem img-responsive img-rounded" alt="cristal"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/cusquena.jpg" class="img img-productsItem img-responsive img-rounded" alt="cusquena"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/arequipena.png" class="img img-productsItem img-responsive img-rounded"  alt=""></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/pilsen-callao.jpg" class="img img-productsItem img-responsive img-rounded" alt="callao"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/san-juan.jpg" class="img img-productsItem img-responsive img-rounded" alt="juan"></a></figure>
							</div>
							<div class="Container-productsItem">
								<figure><a href="#"><img src="img/products/products/trujillo.jpg" class="img img-productsItem img-responsive img-rounded" alt="trujillo"></a></figure>
							</div>
						</div>
					</div>
				</div>
			</article>

			<div class="clear"></div>

			<article class="Container-item">
				<div class="Container-item-left col-5x">
					<div class="Container-list-Pay">
						<button class="btn btn-gray">Agregar Pago</button>
						<span>Pendiente de Pago S/. 2.00</span>
						<p>Efectivo S/. 5.00</p>
						<p>Tarjeta de Crédito Visa S/. 5.00</p>
						<p>Vuelto S/. 5.00</p>
						<p>
							Pagó con S/. 10.00

						</p>
						<div class="Form-inputGroup">			    
							<select class="Form-inputText-small Form-select inline-block" id="comprobante">
								<option value="">Ticket Factura</option>
								<option value="">Boleta de Venta</option>
								<option value="">Factura</option>
							</select>
						</div>
					</div>
					<button class="btn btn-gray">Devolucion</button> 
					<button class="btn btn-gray">Fusionar Cuentas</button> 
					<button class="btn btn-gray">Dividir Cuentas</button> 
				</div>
				<div class="Container-item-right col-5x">
					<div class="Container-info"> <!-- Container con la informacion de el total de la venta y la descripción -->
						<div class="Container-infoDescription col-5x">
							<p class="Descrption-category">Cerveza</p>
							<p class="Descrption-product">Cuzqueña 1100ml</p>
							<p class="Descrption-cantidadPrecio">Caja S/. 52.00</p>
							<p class="Description-oferta">Oferta 2x1</p>
						</div>
						<div class="Container-infoTotalPagar col-5x">
							<p><label>Sub total.......... </label><span>10.17</span></p>
							<p><label>Impuestos.......... </label><span>1.83</span></p>
							<p><label>Descuentos.......... </label><span>0.00</span></p>
							<p><label>Servicio.......... </label><span>0.00</span></p>
							<p><label>Propina.......... </label><span>0.00</span></p>
							<p><label>Total.......... </label><span>12.00</span></p>
						</div>
					</div>
					<div class="Container-comments">
						<div class="col-5x">
							<button class="btn btn-gray">Anular</button>
							<button class="btn btn-gray">Imprimir</button>
							<button class="btn btn-gray">Nueva Venta</button>
						</div>
						<div class="col-4x">
							<textarea cols="30" rows="3" placeholder="Comentarios"></textarea>
						</div>
					</div>
				</div>
			</article>

			<div class="clear"></div>

			<article class="Container-item">
				<p id="Container-descripcionVenta" class="Container-descripcionVenta">3 Ventas - Ultima Venta: Ticket N° A00120, Luis Saravia, S/. 302.00</p>
			</article>
			
			<div class="clear"></div>
		</section>

		<footer class="Footer">
			<p>Control Group SAC Derechos de autor ® 2015</p>
		</footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>