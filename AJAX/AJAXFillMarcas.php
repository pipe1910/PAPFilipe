<?php
// dados na base de dados
    include_once("../includes/body.inc.php"); //precisa do ../
    $txt=addslashes($_POST['txt']);
    $sql="Select * from marcas where marcaNome LIKE '$txt%'";

    $result=mysqli_query($con,$sql);

?>
<table class='table table-striped' width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaMarca.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Imagem</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $dados['marcaId']?></td>
        <td><?php echo $dados['marcaNome']?></td>
        <td><img width='90' src="<?php echo $dados['marcaLogoURL']?>"></td>
        <td><a href="editaMarca.php?id=<?php echo $dados['marcaId']?>"> <i class="fas fa-edit text-primary"></i></a></td>
        <td><a href="#" onclick="confirmaElimina(<?php echo $dados['marcaId']?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
    </tr>
    <?php
    }
    ?>


    </table>

