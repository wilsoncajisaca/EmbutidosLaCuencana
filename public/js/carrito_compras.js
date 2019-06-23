/*  
    ================================
    AGREGAR AL CARRITO DE COMPRAS...
    ================================
*/
var listaCarrito=[];
$(".agregarCarrito").click(function(){

    var idProducto=$(this).attr("idProducto");
    //console.log("idProducto", idProducto);
    var imagen=$(this).attr("imagen");
    var titulo=$(this).attr("tituloPro");
    var precio=$(this).attr("precioPro");

    /* =================================
        Almacenar en el localstorage los productos al carrito
    ================================ */

    listaCarrito.push({
                        "idProducto":idProducto,
                        "imagen":imagen,
                        "titulo":titulo,
                        "precio":precio,
                        "cantidad":"1"
                        });
    
    console.log("ListaCarrito",listaCarrito);

    localStorage.setItem("listaProductos",JSON.stringify(listaCarrito));

});