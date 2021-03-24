<?php
include_once("../includes/body.inc.php");
top_2();
?>
<h1>Adicionar nova marca</h1>
<form action="../Confirma/confirmaNovaMarca.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeMarca"><br>
    <label>Log&oacutetipo:</label>
    <input type="file" name="logoMarca"><br>
    <input type="Submit" value="Adiciona">

