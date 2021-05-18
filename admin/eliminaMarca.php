<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);


$sql = "delete from produtos inner join imagens on imagemProdutoId = produtoId where  produtoMarcaId = ".$id;

mysqli_query($con, $sql);

if(mysqli_query($con, $sql)){

    $con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
    $id = intval($_GET['id']);


    $sql = "delete from marcas inner join produtos on marcaId = produtoMarcaId  left outer join imagens on imagemProdutoId = produtoId where marcaId =".$id;

    mysqli_query($con, $sql);


}

header("location:adminMarcas.php");
?>