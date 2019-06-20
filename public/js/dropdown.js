$("#categoria").change(function(event){
    $.get("categoria/"+event.target.value+"",function(response,producto){
        console.log(response);
    });
});