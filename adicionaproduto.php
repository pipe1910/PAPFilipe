<?php
include_once ("includes/body.inc.php");
?>
<h1>Adicionar novo Produto</h1>
<form action="confirmaAdicionaProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="produtoNome"><br>
    <label>Pre&ccedilo:</label>
    <input type="text" name="produtoPreco"><br>
    <select name="produtoMarca">
        <option value="-1">Escolha o produto...</option>
        <?php
        $sql="select * from produtos order by produtoNome";
        $result=mysqli_query($con,$sql);
        while ($dados=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?></option>
            <?php
        }


        ?>
    </select>

    <input type="Submit" value="Adiciona"><br>



