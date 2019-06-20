$("#select-categoria").change(function(event){
    $.get("categoria/"+event.target.value+"", function(response,producto){
        $("#productos")
        for(i=0; i<response.length; i++){
            $
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