<?php
include_once("../includes/body.inc.php");
top_2();

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * from marcas";
$result=mysqli_query($con,$sql);
?>
<a href="../admin/admin.php"
<button type="button" class="btn btn-light">Voltar</button></a>


<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameMarcas.php",
            type:"post",
            data:{
                idMarca:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a ma rca: ' +result+" ?"))

                    window.location="eliminaMarca.php?id=" + id;
            }
        })
    }

</script>
<table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaMarca.php"><button type="button" class="btn btn-success button1">Adicionar Marca</button></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Imagem</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $dados['marcaId']?></td>
            <td><?php echo $dados['marcaNome']?></td>
            <td><img width='90' src="../<?php echo $dados['marcaLogoURL']?>"></td>
            <td><a href="editaMarca.php?id=<?php echo $dados['marcaId']?>"> <button type="button" class="btn btn-info button1">Edita</button></a></td>
            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['marcaId']?>);"> <button type="button" class="btn btn-danger button1">Elimina</button></a></td>
        </tr>
        <?php
    }
    ?>


</table>

<?php

bot_2();
?>

