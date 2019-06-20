$("#select-categoria").change(function(event){
    $.get("categoria/"+event.target.value+"", function(response,producto){
        $("#productos").empty();
        for(i=0; i<response.length; i++){
            $("#productos").append("<div class='block2'>"); 
            $("#productos").append("<div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelnew'>");  
            $("#productos").append("<img src='"+response[i].portada+"' alt='IMG-PRODUCT'>");
            $("#productos").append("<div class='block2-overlay trans-0-4'>"); 
            $("#productos").append("<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'></a>"); 
            $("#productos").append("<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>");
            $("#productos").append("<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>");
            $("#productos").append("</a><div class='block2-btn-addcart w-size1 trans-0-4'>");
            $("#productos").append("<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>Añadir al carrito</button></div></div></div>");
            $("#productos").append("<div class='block2-txt p-t-20'><a href='#' class='block2-name dis-block s-text3 p-b-5'>"+response[i].titulo+"</a><span class='block2-price m-text6 p-r-5'>"+response[i].precio+"</span></div></div>");
            
        }
        
    });
});

/*$(function(){
    $('#select-categoria').on('change', onSelectChange);

});

function onSelectChange () {
    var project_id = $(this).val();

    //AJAX
    


}*/