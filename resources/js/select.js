function listar_estado(){
    $.ajax({
        url:"app/Http/Controllers/listar_estadoController.php",
        type:"POST"
    }).done(function(resp){
        alert(resp);
    })

}