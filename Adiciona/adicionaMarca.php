<?php
include_once("../includes/body.inc.php");
top_2();
?>
<h2 align="center" style="margin-top: 10%">
<form action="../Confirma/confirmaNovaMarca.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeMarca"><br>
    <label>Log&oacutetipo:</label>
    <input type="file" name="logoMarca"><br>
    <br>
    <br>
    <input type="Submit" value="Adiciona">

