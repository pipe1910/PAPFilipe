<?php
include_once("../includes/body.inc.php");
top_2();


?>
<a href="../admin/admin.php"
<button type="button" class="btn btn-light">Voltar</button></a>
<script>
    function confirmaElimina(id) {
        if(confirm('Confirma que deseja eliminar o produto?'))
            window.location="eliminaProduto.php?id=" + id;
    }
</script>

<table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
    <tr>
        <td colspan="8" align='right'>
            <a href="adicionaProduto.php"><button type="button" class="btn btn-success button1">Adicionar Imagem</button></a>
        </td>
    </tr>
    <?php


        $file_data = scandir($_POST["folder_name"]);
        $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th>Image</th>
    <th>File Name</th>
    <th>Delete</th>
   </tr>
  ';

        foreach($file_data as $file)
        {
            if($file === '.' or $file === '..')
            {
                continue;
            }
            else
            {
                $path = $_POST["folder_name"] . '/' . $file;
                $output .= '
    <tr>
     <td><img src="'.$path.'" class="img-thumbnail" height="50" width="50" /></td>
     <td contenteditable="true" data-folder_name="'.$_POST["folder_name"].'"  data-file_name = "'.$file.'" class="change_file_name">'.$file.'</td>
     <td><button name="remove_file" class="remove_file btn btn-danger btn-xs" id="'.$path.'">Remove</button></td>
    </tr>
    ';
            }
        }
        $output .='</table>';
        echo $output;

    ?>
<?php

bot();
?>
    <script>
        $(document).ready(function(){

            load_folder_list();

            function load_folder_list()
            {
                var action = "fetch";
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{action:action},
                    success:function(data)
                    {
                        $('#folder_table').html(data);
                    }
                });
            }



            $(document).on('click', '.view_files', function(){
                var folder_name = $(this).data("name");
                var action = "fetch_files";
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{action:action, folder_name:folder_name},
                    success:function(data)
                    {
                        $('#file_list').html(data);
                        $('#filelistModal').modal('show');
                    }
                });
            });

            $(document).on('click', '.remove_file', function(){
                var path = $(this).attr("id");
                var action = "remove_file";
                if(confirm("Are you sure you want to remove this file?"))
                {
                    $.ajax({
                        url:"action.php",
                        method:"POST",
                        data:{path:path, action:action},
                        success:function(data)
                        {
                            alert(data);
                            $('#filelistModal').modal('hide');
                            load_folder_list();
                        }
                    });
                }
            });

            $(document).on('blur', '.change_file_name', function(){
                var folder_name = $(this).data("folder_name");
                var old_file_name = $(this).data("file_name");
                var new_file_name = $(this).text();
                var action = "change_file_name";
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{folder_name:folder_name, old_file_name:old_file_name, new_file_name:new_file_name, action:action},
                    success:function(data)
                    {
                        alert(data);
                    }
                });
            });

        });
    </script>


