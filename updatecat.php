<?php 
include "config.php";
if(isset($_POST['updatecat']))
{
    $id = $_POST['id'];
    $cname = $_POST['cname'];
    $des = $_POST['des'];


    $sql = "update addcategory SET catname = '$cname' , des = '$des' where id = '$id'" ;
    $query = mysqli_query($con,$sql);
    if($query)
    {
        header('location:allcat.php');
    }

}
?>