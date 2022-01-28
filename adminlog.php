<?php 
session_start();

include "config.php";
if(isset($_POST['login']))
{
    $user = $_POST['username'];
    $pwd = $_POST['pwd'];
    

$sql = "select * from admin where username='$user' AND passw='$pwd' ";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
if($row['username'] == $user && $row['passw'] == $pwd)
{
header('location:home.php');
$_SESSION['admin'] = $user;
}
else 
{
    echo "<script>alert('wrong id and password');</script>";
    echo "<script>window.location= 'adminlogin.php';</script>";

}
}
?>