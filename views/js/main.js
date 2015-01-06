$(function () {
	$("#proveedor").hover(function(){$("#proveedorDetalle").addClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#ordenDeCompra").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").addClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#inventario").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").addClass("block"); $("#inventarioDetalle2").addClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#ordenDeVenta").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").addClass("block"); $("#clienteDetalle").removeClass("block"); });
	$("#cliente").hover(function(){$("#proveedorDetalle").removeClass("block"); $("#ordenDeCompraDetalle").removeClass("block"); $("#inventarioDetalle").removeClass("block"); $("#inventarioDetalle2").removeClass("block"); $("#ordenDeVentaDetalle").removeClass("block"); $("#clienteDetalle").addClass("block"); });
});


/**/
/**/
/**/
/*BEGIN POP UP functions*/
function fn_cerrar(){
  $.unblockUI({ 
    onUnblock: function(){
      $("#div_oculto_proveedor").html("");
      $("#div_oculto_producto").html("");
    }
  }); 
};

/*PROVEEDOR*/
$("#nuevoProveedor").click(function () {
  $("#div_oculto_proveedor").load("../models/proveedor_form_agregar.php", function(){
    $.blockUI({
      message: $('#div_oculto_proveedor'),
      css:{
        top: '20%'
      }
    }); 
  });
});

function fn_buscar_proveedor(){
  var str = $("#frm_buscar_proveedor").serialize();
  console.log(str);
  $.ajax({
    url: '../models/proveedor_listar.php',
    type: 'get',
    data: str,
    success: function(data){
      $("#div_listar_proveedor").html(data);
    }
  });
}




/*PRODUCTO*/
$("#nuevoProducto").click(function () {
  $("#div_oculto_producto").load("../models/producto_form_agregar.php", function(){
    $.blockUI({
      message: $('#div_oculto_producto'),
      css:{
        top: '1%'
      }
    }); 
  });
});

function fn_buscar_producto(){
  var str = $("#frm_buscar_producto").serialize();
  console.log(str);
  $.ajax({
    url: '../models/producto_listar.php',
    type: 'get',
    data: str,
    success: function(data){
      $("#div_listar_producto").html(data);
    }
  });
}




/*COMPRA DETALLE*/
$("#nuevoCompraDet").click(function () {
  $("#div_oculto_compra_det").load("../models/compra_det_form_agregar.php", function(){
    $.blockUI({
      message: $('#div_oculto_compra_det'),
      css:{
        top: '5%'
      }
    }); 
  });
});

function fn_buscar_compra_det(){
  var str = $("#frm_buscar_compra_det").serialize();
  console.log(str);
  $.ajax({
    url: '../models/compra_det_listar.php',
    type: 'get',
    data: str,
    success: function(data){
      $("#div_listar_compra_det").html(data);
    }
  });
}


fn_buscar_compra_det();
fn_buscar_proveedor();
fn_buscar_producto();