<?php
include_once("../includes/body.inc.php");
top();
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2 align="left ">Sneaker's Admin
    <br>
    <a href="papFilipe\admin\adminProdutos.php">
<button type="button" class="btn btn-light" id="admin">Produtos</button>

</a>
<a href="papFilipe\admin\adminMarcas.php">
    <button type="button" class="btn btn-light" id="admin">Marcas</button>
</a>
    <a href="papFilipe\admin\adminImagens.php">
    <button type="button" class="btn btn-light" id="admin">Imagens</button>
</a>
</h2>
<table>
    <tr>
        <th>Sapatilha</th>
        <th>Fotografia</th>
        <th>Preço</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <tr>
        <td>Nike Air Force 1 07 Premium</td>
        <td><img src="../images/af1prebi.png" width="120"></td>
        <td>129,99&euro;</td>
        <td><a href="../Edita/editaProduto.php"><i class="fas fa-cogs"></a></i></td>
        <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Force 1 Black and White</td>
        <td><img src="../images/af1bi.png" width="120"></td>
        <td>119,99&euro; </td>
      <td><a href="../Edita/editaProduto.php"><i class="fas fa-cogs"></a></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Presto Black</td>
        <td><img src="../images/airprestobi.png" width="120"></td>
        <td>109,99&euro;</td>
      <td><a href="../Edita/editaProduto.php"><i class="fas fa-cogs"></a></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Max 97 Black</td>
        <td><img src="../images/airmax97bi.png" width="120"></td>
        <td>189,99&euro;</td>
      <td><a href="../Edita/editaProduto.php"><i class="fas fa-cogs"></a></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Jordan 1 Obsidian</td>
        <td><img src="../images/obsidianbi.png" width="120"></td>
        <td>459,99&euro;</td>
      <td><a href="../Edita/editaProduto.php"><i class="fas fa-cogs"></a></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Kobe 1 X Undefeated</td>
        <td><img src="../images/kobe1bi.png" width="120"></td>
        <td>829,99&euro;</td>
      <td><a href="../Edita/editaProduto.php"><i class="fas fa-cogs"></a></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>

</table>
</body>
</html>


