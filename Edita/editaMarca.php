<?php

include_once("../includes/body.inc.php");
top_2();
$id = intval($_GET['id']);

$sql = "select * from marcas where marcaId=$id";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

?>
<script>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<div class="container">
<h2 align="center" style="margin-top: 10%">
    <form action="../Confirma/confirmaEditaMarca.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="marcaId" value="<?php echo $id ?>">
        <label>Nome: </label>
        <input type="text" name="nomeMarca" value="<?php echo $dados ['marcaNome'] ?>"><br>
        <label>Logótipo:</label><br>
        <img width="400" id="output_image" src="../<?php echo $dados['marcaLogoURL']?>"><br>
        <input type="file" accept="image/*" name="logoMarca" onchange="preview_image(event)" style="color: darkgray">
        <input type="Submit" value="Edita">
    </form>
    </div>