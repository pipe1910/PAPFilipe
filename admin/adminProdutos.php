<?php
include_once("../includes/body.inc.php");
top_2();

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * from marcas";
$result=mysqli_query($con,$sql);
?>


<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameMarca.php",
            type:"post",
            data:{
                idCanal:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o produto:'+result+"?"))
                    window.location="eliminaProduto.php?id=" + id;
            }
        })
    };

    $('document').ready(function (){
        $('#search').keyup(function (){
            fillTableMarcas(this.value);
        });
        fillTableMarcas();
    })
</script>


<table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaProduto.php"><i class='fas fa-plus text-success'> Adicionar produto</i></a>
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
            <td><a href="../Edita/editaProduto.php?id=<?php echo $dados['marcaId']?>"> <i class="fas fa-edit text-primary">Edita</i></a></td>
            <td><a href="../Elimina/eliminaProduto.php" onclick="confirmaElimina(<?php echo $dados['marcaId']?>);"> <i class="fas fa-trash  text-danger">Elimina</i></a></td>
        </tr>
        <?php
    }
    ?>

    <script>
        function confirmaElimina(id) {
            if(confirm('Confirma que deseja eliminar o produto?'))
                window.location="adminProdutos.php?id=" + id;
        }

    </script>
</table>

<?php

bot();
?>
