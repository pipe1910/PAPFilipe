<?php
    include_once ("includes/body.inc.php");
    $id=intval($_GET['id']);

    $sql="select * from marcas where marcaId=$id";
    $resultMarcas=mysqli_query($con,$sql);
    $dadosMarcas=mysqli_fetch_array($resultMarcas);

?>
<h1>Editar Marca</h1>
<form action="confirmaEditaMarca.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="marcaId" value="<?php echo $id?>">
<label>Nome: </label>
<input type="text" name="nomeMarca" value="<?php echo $dadosMarcas ['marcaNome']?>"><br>
<label>Logótipo:</label><br>
<img src="../<?php echo $dadosMarcas['marcaLogoURL']?>"><br>
<input type="file" name="logoMarca"><br>
<input type="Submit" value="Edita"
<a href="adminMarcas.php"></a>
    <br>

