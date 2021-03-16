<?php
include_once("includes/body.inc.php");
top();

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * from imagens";
$result=mysqli_query($con,$sql);
?>


<script>
    function confirmaElimina(id) {
        if(confirm('Confirma que deseja eliminar a imagem?'))
            window.location="eliminaImagem.php?id=" + id;
    }
</script>
<table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
    <tr>
        <td colspan="5" align='right'>
            <a href="../Adiciona/adicionaImagem.php"><i class='fas fa-plus text-success'> Adicionar imagem</i></a>
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
            <td><?php echo $dados['imagemId']?></td>
            <td><?php echo $dados['imagemNome']?></td>
            <td><img width='90' src="<?php echo $dados['imagemURL']?>"></td>
            <td><a href="../Elimina/eliminaImagem.php" onclick="confirmaElimina(<?php echo $dados['marcaId']?>);"> <i class="fas fa-trash  text-danger">Elimina</i></a></td>
        </tr>
        <?php
    }
    ?>


</table>

<?php

bot();
?>

