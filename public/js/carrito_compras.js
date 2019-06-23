/*  
    ================================
    AGREGAR AL CARRITO DE COMPRAS...
    ================================
*/
$(".agregarCarrito").click(function(){

    var idProducto=$(this).attr("idProducto");
    console.log("idProducto", idProducto);
    var imagen=$(this).attr("imagen");
    console.log("idProducto", imagen);
    var titulo=$(this).attr("tituloPro");
    console.log("idProducto", titulo);
    var precio=$(this).attr("precioPro");
    console.log("idProducto", precio);

});