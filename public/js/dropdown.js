$(function(){
    $('#select-categoria').on('change', onSelectChange);

});

function onSelectChange () {
    var project_id = $(this).val();
    alert(project_id);
}