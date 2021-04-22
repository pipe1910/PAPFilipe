<?php
include_once("../../includes/body.inc.php");
top_2();

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * from produtos inner join marcas on produtoMarcaId = marcaId";
$result=mysqli_query($con,$sql);
?>
<a href="../admin/admin.php"
<button type="button" class="btn btn-light">Voltar</button></a>
<script>
    function confirmaElimina(id) {
        if(confirm('Confirma que deseja eliminar o produto?'))
            window.location="eliminaProduto.php?id=" + id;
    }
</script>

<table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
    <tr>
        <td colspan="8" align='right'>
            <a href="adicionaProduto.php"><button type="button" class="btn btn-success button1">Adicionar Imagem</button></a>
        </td>
    </tr>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Image</th>
            <th>File Name</th>
            <th>Delete</th>
        </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $dados['produtoId']?></td>
            <td><?php echo $dados['produtoNome']?></td>
            <td><?php echo $dados['produtoDescricao']?></td>
            <td><?php echo $dados['produtoPreco']?></td>
            <td><?php echo $dados['marcaNome']?></td>
            <td><a href="../admin/adminImagens.php?id=<?php echo $dados['produtoId']?>"><button type="button" class="btn btn-secondary button1">Imagens</button></a></td>
            <td><a href="editaProduto.php?id=<?php echo $dados['produtoId']?>"><button type="button" class="btn btn-info button1">Edita</button></a></td>
            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['produtoId']?>);"> <button type="button" class="btn btn-danger button1">Elimina</button></a></td>

        </tr>
        <?php
    }
    ?>
</table>

<?php

bot_2();
?>

