$(function () {
	$("#proveedor").hover(function(){
		$("#proveedorDetalle").addClass("block");
		$("#ordenDeCompraDetalle").removeClass("block");
		$("#inventarioDetalle").removeClass("block");
		$("#inventarioDetalle2").removeClass("block");
		$("#ordenDeVentaDetalle").removeClass("block");
		$("#clienteDetalle").removeClass("block");
	})
	$("#ordenDeCompra").hover(function(){
		$("#proveedorDetalle").removeClass("block");
		$("#ordenDeCompraDetalle").addClass("block");
		$("#inventarioDetalle").removeClass("block");
		$("#inventarioDetalle2").removeClass("block");
		$("#ordenDeVentaDetalle").removeClass("block");
		$("#clienteDetalle").removeClass("block");
	})
	$("#inventario").hover(function(){
		$("#proveedorDetalle").removeClass("block");
		$("#ordenDeCompraDetalle").removeClass("block");
		$("#inventarioDetalle").addClass("block");
		$("#inventarioDetalle2").addClass("block");
		$("#ordenDeVentaDetalle").removeClass("block");
		$("#clienteDetalle").removeClass("block");
	})
	$("#ordenDeVenta").hover(function(){
		$("#proveedorDetalle").removeClass("block");
		$("#ordenDeCompraDetalle").removeClass("block");
		$("#inventarioDetalle").removeClass("block");
		$("#inventarioDetalle2").removeClass("block");
		$("#ordenDeVentaDetalle").addClass("block");
		$("#clienteDetalle").removeClass("block");
	})
	$("#cliente").hover(function(){
		$("#proveedorDetalle").removeClass("block");
		$("#ordenDeCompraDetalle").removeClass("block");
		$("#inventarioDetalle").removeClass("block");
		$("#inventarioDetalle2").removeClass("block");
		$("#ordenDeVentaDetalle").removeClass("block");
		$("#clienteDetalle").addClass("block");
	})
});

$(function () {
	$('#nuevoProveedor').jBox('Modal', {
	    ajax: {
	        url: '../models/compras-proveedor.php',
	        data: 'id=1',
	        reload: false,
	        getData: 'data-ajax',
            setContent: true,
            spinner: true
	    }
	});
});
