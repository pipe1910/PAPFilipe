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
        if(confirm('Confirma que deseja eliminar a marca?'))
            window.location="../Elimina/eliminaMarca.php?id=" + id;
    }
</script>
<table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
    <tr>
        <td colspan="5" align='right'>
            <a href="../Adiciona/adicionaMarca.php"><i class='fas fa-plus text-success'> Adicionar marca</i></a>
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
            <td><a href="../Edita/editaMarca.php?id=<?php echo $dados['marcaId']?>"> <i class="fas fa-edit text-primary">Edita</i></a></td>
            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['marcaId']?>);"> <i class="fas fa-trash  text-danger">Elimina</i></a></td>
        </tr>
        <?php
    }
    ?>


</table>

<?php

bot();
?>

