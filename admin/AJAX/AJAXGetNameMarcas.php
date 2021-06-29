<?php
// dados na base de dados
    include_once("includes/body.inc.php");
    $id=intval($_POST['idMarca']);
    $con=mysqli_connect(HOST,USER,PWD,DATABASE);
    $sql="Select * from marcas where marcaId=$id";

    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    echo $dados['marcaNome'];
?>