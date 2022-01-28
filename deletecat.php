<?php
include "config.php";
$id = $_GET['id'];
            
$sql = "DELETE FROM addcategory WHERE id = $id ";
$query = mysqli_query($con,$sql);
if($query)
{
    header('location:allcat.php');

}

?>
