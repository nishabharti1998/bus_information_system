<?php
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$stopage_id=$_GET['id'];
$query="DELETE FROM stoppage_details WHERE stoppage_details_id='$stoppage_id'";
mysqli_query($conn,$query);
?>
   