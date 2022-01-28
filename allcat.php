
<?php 
include "config.php";
session_start();
if(isset($_SESSION['admin']))
{


$sql = "select * from addcategory";
$query = mysqli_query($con,$sql);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="home.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body> 
  <div class="wrapper d-flex">
    <div class="sidebar text-success" > <small class="text-primary pl-3">BLOGS</small>
        <ul>
        <li><a href="home.php"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="addblog.php"><i class="far fa-credit-card"></i>Add blogs</a></li>
            <li><a href="addcategory.php"><i class="fas fa-file-invoice"></i>Add Category</a></li>
            <li><a href="allcat.php"><i class="fas fa-home"></i>All Category</a></li>
            <li><a href="allblogs.php"><i class="fas fa-home"></i>All blogs</a></li>
            <li><a href="logout.php"><i class="fas fa-home"></i>Logout</a></li>
        </ul> <small class="text-muted px-3"></small>
      
    </div>
</div>
      <div class="container">
    <table class="table" border=2> 
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">category</th>
            
            <th scope="col">cat_description</th>
            <th scope="col">action</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <?php 

    while($row = mysqli_fetch_array($query))
    {
     $id =  $row['id'];
     $catname =  $row['catname'];
     
      $catdes = $row['des'];
  
        
        echo '<tbody>';
        echo '<tr>';
        echo '<td>'.$id.'</td>'; 
        echo '<td>'.$catname.'</td>';
       
        echo '<td>'.$catdes.'</td>';
        ?>
       <td> <a href="editcat.php?id=<?php echo $id?>">edit</a></td>
        <td><a href="deletecat.php?id=<?php echo $id?>">delete</a></td>
       <?php
        echo '</tbody>';
        echo '</tr>';
      }
        ?>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<?php }
else 
{
  echo 'login';
}
?>