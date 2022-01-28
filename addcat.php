<?php
include "config.php"; 
if(isset($_POST['addcat']))
{
    $cat = $_POST['cat'];
    $des = $_POST['des'];
  
$sql = "insert into addcategory(catname,des) values('$cat','$des')";
$query = mysqli_query($con,$sql);
if($query)
{
    echo '<script> alert("Add category successfull");</script>';
    echo '<script> window.location = "addcategory.php";</script>';
    
}

}
else
 {
    echo "login";
}
?> 