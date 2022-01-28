<?php 
session_start();
if(isset($_SESSION['admin']))
{
   session_destroy();
   header('location:adminlogin.php');

}
else {
   echo "login first for access";
}

?>