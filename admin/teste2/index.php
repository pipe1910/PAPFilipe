
<!DOCTYPE html>
<html>
<head>
    <title>PHP Filesystem with Ajax JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br /><br />
<div class="container">
    <h2 align="center">PHP Filesystem with Ajax JQuery</a></h2>
    <br />
    <div align="right">
        <button type="button" name="create_folder" id="create_folder" class="btn btn-success">Create</button>
    </div>
    <br />
    <div  id="folder_table">

    </div>
</div>
</body>
</html>


<div class="modal-body" id="file_list"></div>


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



    });
</script>

