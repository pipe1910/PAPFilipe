<?php
include_once("includes/body.inc.php");
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
<button type="button" class="btn btn-light" id="admin">Adicionar produto</button></h2>

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
        <td><img src="images/af1prebi.png" width="120"></td>
        <td>129,99&euro;</td>
        <td><i class="fas fa-cogs"></i></td>
        <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Force 1 Black and White</td>
        <td><img src="images/af1bi.png" width="120"></td>
        <td>119,99&euro; </td>
      <td><i class="fas fa-cogs"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Presto Black</td>
        <td><img src="images/airprestobi.png" width="120"></td>
        <td>109,99&euro;</td>
      <td><i class="fas fa-cogs"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Max 97 Black</td>
        <td><img src="images/airmax97bi.png" width="120"></td>
        <td>189,99&euro;</td>
      <td><i class="fas fa-cogs"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Air Jordan 1 Obsidian</td>
        <td><img src="images/obsidianbi.png" width="120"></td>
        <td>459,99&euro;</td>
      <td><i class="fas fa-cogs"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  <tr>
        <td>Nike Kobe 1 X Undefeated</td>
        <td><img src="images/kobe1bi.png" width="120"></td>
        <td>829,99&euro;</td>
      <td><i class="fas fa-cogs"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>

</table>
<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputEmail">E-mail:</label>
                        <input type="email" class="form-control" id="InputEmail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">


                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Manter-me logado</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-light">Submeter</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>


