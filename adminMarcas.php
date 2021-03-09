<?php
include_once ("includes/body.inc.php");
Top();
?>


<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameMarca.php",
            type:"post",
            data:{
                idCanal:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a marca:'+result+"?"))
                    window.location="eliminaMarca.php?id=" + id;
            }
        })
    };

    $('document').ready(function (){
        $('#search').keyup(function (){
            fillTableMarcas(this.value);
        });
        fillTableMarcas();
    })
</script>

<h1>Lista das marcas</h1>
Pesquisar:<br><input type="text" id="search">
<div id="tableContent"></div>

<?php

Bot();
?>

