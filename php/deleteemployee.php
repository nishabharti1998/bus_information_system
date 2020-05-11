<?php
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$emp_id=$_GET['id'];
$query="DELETE FROM employee WHERE employee_id='$emp_id'";
mysqli_query($conn,$query);
header("location:showemployee.php");
?>
   