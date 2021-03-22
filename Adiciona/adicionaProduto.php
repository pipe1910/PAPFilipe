<?php
include_once("../includes/body.inc.php");
top();
?>
<h1>Adicionar novo produto</h1>
<form action="../Confirma/confirmaAdicionaProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="produtoNome"><br>
    <br>
    <label>Descrição:</label>
    <textarea name="produtoDescricao" cols="50" rows="10">
    </textarea>
    <br>
    <br>
    <br>
    <label>Preço:</label>
    <input type="text" name="produtoPreco">
    <br>
    <br>
    <label>Marca:</label>
    <select name="produtoMarcaId">
        <option value="-1">Escolha a Marca...</option>
        <?php
        $sql="select * from marcas order by marcaNome";
        $result=mysqli_query($con,$sql);
        while ($dados=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $dados['marcaId']?>"><?php echo $dados['marcaNome']?></option>
            <?php
        }


        ?>
    </select>


    <input type="Submit" value="Adiciona"
    <a href="../admin/adminProdutos.php"></a><br>

