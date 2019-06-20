$("#producto").change(function(event){
    $.get("cetegoria/"+event.target.value+"",function(response,producto){
        console.log(response);
    });
});