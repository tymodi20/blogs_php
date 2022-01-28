<?php 
include "config.php";
session_start();
if(isset($_SESSION['admin']))
{


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

    <div class="container" >
    <h1>Add category</h1>
        <div class="">
            <form method="POST" action="addcat.php">
       <label class=" text-primary"> Enter category :-
           </label><input type="text" class ="cat" name="cat" placeholder="add category" required>
           <br>
           <br>
           <label class=" text-primary"> Enter Description :-</label>
           <br>
           <textarea name="des" rows = "3" cols= "25" required placeholder="write description"></textarea>
           <br>
           <input type="submit" value="Add Category" name="addcat">
</form>
            </div>
        </div>      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>

<?php 
}
else {
    echo "login";
}
?>