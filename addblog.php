
<?php 
session_start();
include "config.php";
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
    <style>
        .container{
            margin-left:350px;
            margin-top:300px;
            background-color:cyan;
        }
        .cat{
            margin-left:25px;
        }
     
        </style>
  </head>
  <body>

  <div class="wrapper d-flex ">
    <div class="sidebar text-success" > <small class="text-primary pl-3"><h4><?php echo $uname; ?></h4></small>  
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

    <div class="container" >
    <h1>Add Blogs</h1>
        <div class="">
            <form method="POST" action="#">
                
              <label>select category </label>
                    <select name="secatname">
                        <?php 
                        include "config.php";
                        $sql = "select * from addcategory";
                        $query = mysqli_query($con,$sql);

                        while($row = mysqli_fetch_array($query)) 
                        { 
                            $a = $row['catname'];
                       

                         ?>
                       
                    <option value="<?php echo $a; ?> "><?php echo $a; ?></option>
                    <?php }?>
            
                
    </select>
    <br>
    
    <br>
       <label class=" text-primary"> Enter Blog name :-
           </label><input type="text" class ="blog" name="blog" placeholder="add blog name" required>
           <br>
           <br>
           <label class=" text-primary"> Enter Description :-</label>
           <br>
           <textarea name="des" rows = "3" cols= "25" required placeholder="write description"></textarea>
           <br>
           <input type="submit" value="Add blog" name="addblog">
</form>
            </div>
        </div>      
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>
<?php } ?>
<?php 
include "config.php";
if(isset($_POST['addblog']))
{
$catname = $_POST['secatname'];
$blog = $_POST['blog'];
$des = $_POST['des'];

    $sql = "insert into addblogs(catname,blogname,blogdes) VALUES('$catname','$blog','$des')";
    $query = mysqli_query($con,$sql);
    if($query)
    {
        header('location:allblogs.php');
    }
}

?>

<?php }
else {
    echo "first login sdnoin irngoirerjiohgrhg";
}
?>


