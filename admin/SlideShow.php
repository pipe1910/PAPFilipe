<?php
include_once("includes/body.inc.php");
top_2();

?>
<div class="container" align="center">
    <h2 align="center" style="margin-bottom: 10px">Adiciona Imagem</h2>
    <form action="enviaImagemSlideshow.php" method="post" enctype="multipart/form-data">
        <label>Imagem:</label>
        <input type="file" name="arquivo"><br>
        <br>
        <br>
        <input type="submit" value="Adiciona" <button type="button" class="btn btn-success button1 mt-3"></button>

