/*  
    ================================
    Visualizar los productos en la pagina del carrito de compras...
    ================================
*/
if(localStorage.getItem("listaProductos")!=null){

    var listaCarrito = JSON.parse(localStorage.getItem("listaProductos"));

    listaCarrito.forEach(funcionForEach);

    function funcionForEach(item, index){
        console.log("item",item.idProducto);
    }

}

/*  
    ================================
    AGREGAR AL CARRITO DE COMPRAS...
    ================================
*/

$(".agregarCarrito").click(function(){

    var idProducto=$(this).attr("idProducto");
    //console.log("idProducto", idProducto);
    var imagen=$(this).attr("imagen");
    var titulo=$(this).attr("tituloPro");
    var precio=$(this).attr("precioPro");


    /* =================================
        Recuperar almacenamiento del localstorage
    ================================ */

    if(localStorage.getItem("listaProductos")==null){
        listaCarrito=[];
    }else{
        listaCarrito.concat(localStorage.getItem("listaProductos"));
    }

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