<?php
include_once("includes/body.inc.php");
top_2();
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * from criticas inner join perfis on criticaPerfilId = perfilId";
$result=mysqli_query($con,$sql);

?>
<a href="../admin/admin.php"
<button type="button" class="btn btn-light">Voltar</button></a>
    <script>
        function confirmaElimina(id) {
            $.ajax({
                url:"AJAX/AJAXGetCritica.php",
                type:"post",
                data:{
                    idCritica:id
                },
                success:function (response){
                    if(confirm('Confirma que deseja eliminar a critica: ' +response+" ?"))

                        window.location="eliminaCritica.php?id=" + id;
                }
            })
        }

    </script>
    <table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
        <tr>
            <td colspan="5" align='right'></td>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Critica</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>
<?php
while($dados=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $dados['criticaId']?></td>
        <td><?php echo $dados['perfilNome']?></td>
        <td><?php echo $dados['criticaTexto']?></td>
        <td><a href="#" onclick="confirmaElimina(<?php echo $dados['criticaId']?>)"> <button type="button" class="btn btn-danger button1">Elimina</button></a></td>
    </tr>
    <?php
}
?>
    </table>
<?php
bot_2();
?>