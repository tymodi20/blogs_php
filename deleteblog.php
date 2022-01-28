<?php
include "config.php";
$id = $_GET['id'];
            
$sql = "DELETE FROM addblogs WHERE blogid = $id ";
$query = mysqli_query($con,$sql);
if($query)
{
    header('location:allblogs.php');

}

?>
