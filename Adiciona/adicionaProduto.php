<?php
include_once("../includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
top_2();
?>
<h2 align="center" style="margin-top: 10%">
<form action="../Confirma/confirmaAdicionaProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="produtoNome"><br>
    <br>
    <label>Descricao:</label>
    <textarea name="produtoDescricao" cols="50" rows="5">
    </textarea>
    <br>
    <label>Preco:</label>
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
    <input type="Submit" value="Adiciona">
   <br>




