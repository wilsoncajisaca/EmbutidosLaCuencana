/*  
    ================================
    Visualizar los productos en la pagina del carrito de compras...
    ================================
*/
if(localStorage.getItem("listaProductos")!=null){

    var listaCarrito = JSON.parse(localStorage.getItem("listaProductos"));

    listaCarrito.forEach(funcionForEach);

//    $(".itemsProductos").empty();

    function funcionForEach(item, index){
        $(".table-shopping-cart").append(`
                                <tr class="table-row">
                                    <td class="column-1">
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <img src="images/item-10.jpg" alt="IMG-PRODUCT">
                                        </div>
                                    </td>
                                    <td class="column-2">Men Tshirt</td>
                                    <td class="column-3">$36.00</td>
                                    <td class="column-4">
                                        <div class="flex-w bo5 of-hidden w-size17">
                                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                            </button>

                                            <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

                                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="column-5">$36.00</td>
                                </tr>
                                `)
        }

    }else{
    
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