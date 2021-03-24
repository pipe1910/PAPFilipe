<?php
    include_once("../includes/body.inc.php");
    $id=intval($_GET['id']);

    $sql="select * from marcas where marcaId=$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
top_2();
?>
<h1>Editar Marca</h1>
<form action="../admin/adminMarcas.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="marcaId" value="<?php echo $id?>">
<label>Nome: </label>
<input type="text" name="nomeMarca" value="<?php echo $dados ['marcaNome']?>"><br>
<label>Logótipo:</label><br>
<img src="<?php echo $dados['marcaLogoURL']?>"><br>
<input type="file" name="logoMarca"><br>
<input type="Submit" value="Edita">


