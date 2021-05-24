
    function confirmaElimina(id) {
    $.ajax({
        url:"AJAX/AJAXGetNameMarcas.php",
        type:"post",
        data:{
            idMarca:id
        },
        success:function (result){
            if(confirm('Confirma que deseja eliminar a marca: ' +result+" ?"))
                window.location="eliminaMarca.php?id=" + id;
        }
    })
}

