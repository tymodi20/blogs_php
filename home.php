
<?php 
include "config.php";

session_start();
if(isset($_SESSION['admin']))
{



$admin = $_SESSION['admin'];
$sql1 = "select username from admin where username = '$admin'";
$query1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($query1))
{
  $uname = $row['username'];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="home.css">
  </head>
  <body>

  <div class="wrapper d-flex">
    <div class="sidebar text-success" > <small class="text-primary pl-3"><h4><?php echo $uname; ?></h4></small>
        <ul>
        <li><a href="home.php"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="addblog.php"><i class="far fa-credit-card"></i>Add blogs</a></li>
            <li><a href="addcategory.php"><i class="fas fa-file-invoice"></i>Add Category</a></li>
            <li><a href="allcat.php"><i class="fas fa-home"></i>All Category</a></li>
            <li><a href="allblogs.php"><i class="fas fa-home"></i>All blogs</a></li>
            <li><a href="logout.php"><i class="fas fa-home"></i>Logout</a></li>
        </ul> <small class="text-muted px-3"></small>
        <?php 
        }

        ?>
      
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>
<?php 
}
else {
  echo "first login in";
}
?>