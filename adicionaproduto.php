<?php
include_once ("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
?>
<h1>Adicionar novo Produto</h1>
<form action="confirmaAdicionaProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="produtoNome"><br>
    <label>Preco:</label>
    <input type="text" name="produtoPreco"><br>
    <label>Descrição do produto:</label>
    <input type="text" name="produtoDescricao"><br>



    <select name="produtoMarcaId">
        <option value="-1">Escolha a marca...</option>
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

    <input type="Submit" value="Adiciona"><br>

</form>

