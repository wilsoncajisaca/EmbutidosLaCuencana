/*  
    ================================
    AGREGAR AL CARRITO DE COMPRAS...
    ================================
*/
$(".agregarCarrito").click(function(){

    var idProducto=$(this).attr("idProducto");
    console.log("idProducto", idProducto);
    var imagenn=$(this).attr("imagen");
    var titulo=$(this).attr("tituloPro");
    var precio=$(this).attr("precioPro");

});