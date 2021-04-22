<?php



if(isset($_POST["action"]))
{
    if($_POST["action"] == "fetch")
    {
        $folder = array_filter(glob('*'), 'is_dir');

        $output = '
  <table class="table table-bordered table-striped">
   <tr>
    

   
   </tr>
   ';
        if(count($folder) > 0)
        {
            foreach($folder as $name)
            {
                $output .= '
     <tr>
    
    
    
      <td><button type="button" name="view_files" data-name="'.$name.'" class="view_files btn btn-default btn-xs">View Files</button></td>
     </tr>';
            }
        }
        else
        {
            $output .= '
    <tr>
     <td colspan="6">No Folder Found</td>
    </tr>
   ';
        }
        $output .= '</table>';
        echo $output;
    }







    if($_POST["action"] == "fetch_files")
    {
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
    }

    if($_POST["action"] == "remove_file")
    {
        if(file_exists($_POST["path"]))
        {
            unlink($_POST["path"]);
            echo 'File Deleted';
        }
    }


}
?>