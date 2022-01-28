<?php 
include "config.php";
$id = $_GET['id'];

$sql = "select * from addcategory where id = '$id'";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query))
{

    $id = $row['id'];
  $cname = $row['catname'];
 $des = $row['des'];

}
?>


<html>
<body>
    <form method="POST" action="updatecat.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
        <br>
        <input type="text" name="cname" value="<?php echo $cname; ?>">
        <br>
        <input type="text" name="des" value="<?php echo $des; ?>">

        
    <input type="submit" value="update" name="updatecat">

</form>
</body>

</html>
