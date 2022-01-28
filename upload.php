<?php 
include "config.php";
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $files = $_FILES['file']; // array filesprint


     $filename = $files['name'];
     $filerror = $files['error'];
     $filetmp = $files['tmp_name'];    

    $fileext = explode('.',$filename);  
   
    $ext = strtolower(end($fileext));
   
    $extstore = array('png','jpg','jpeg');
   
    if(in_array($ext,$extstore))
    {
        $desfile = 'upload/'.$filename;
       move_uploaded_file($filetmp,$desfile);
    ?>


<html>
    <body>
       <table border=1>
           <tr>
         <th>No.</th> 
         <th>Name.</th>
         <th>image</th>
             </tr>

  <?php 
  $sql = "insert into imgupload(username,img) values('$username','$desfile')";
       $query = mysqli_query($con,$sql);

        $sql1 = "select * from imgupload";
        $query1 = mysqli_query($con,$sql1);
        while($row1 = mysqli_fetch_array($query1))
        {
            $id = $row1['id'];    
            $name = $row1['username'];
            $img = $row1['img'];
            
       echo "<tr>";          
       echo "<td>". $id ."</td>";
       echo "<td>".$name ."</td>";
       
          ?>
            <td><img src="<?php echo $img; ?>" height="100px" width="200px"></td>
      </tr>

        </table>
        </body>
        </html>
        <?php

        } 


    }

    
}

?>