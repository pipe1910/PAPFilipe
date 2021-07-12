<?php
include_once("includes/body.inc.php");
top_2();
?>
<script>
    function preview_image(event)
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>



<div class="container" align="center">
    <h2 align="center" style="margin-bottom: 10px">Adiciona Imagem</h2>
    <form action="confirmaNovaImagemSlideShow.php" method="post" enctype="multipart/form-data">
        <label>Imagem:</label>
        <input type="file" name="logoImagem"><br>
        <br>

        <input type="Submit" value="Adiciona" <button type="button" class="btn btn-success button1 mt-3"></button>
<?php
bot_2();
?>
