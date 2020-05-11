<?php
session_start();
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);

$user=$_SESSION['user_name'];
$bus_id=$_POST['bus_id'];
$busnumber=$_POST['bus_name'];
$bustype=$_POST['bus_type'];
$seats=$_POST['bus_seats'];
$route=$_POST['route'];

$query1="SELECT user_id  FROM users WHERE username='$user'";
$q1 = mysqli_query($conn,$query1);
$n1 = mysqli_fetch_array($q1);
$user_id = $n1['user_id'];

$query="INSERT INTO bus_details(bus_details_id,bus_id,bus_number,user_id,bus_type,number_of_seats) VALUES('','$bus_id','$busnumber','$user_id','$bustype','$seats')";
mysqli_query($conn,$query);

$query3 = "SELECT stoppage_details_id FROM stoppage_details WHERE stoppage_name='$route'";
$result3=mysqli_query($conn,$query3);
$n3 = mysqli_fetch_array($result3);
$stoppage_id = $n3['stoppage_details_id'];
    
$query4="INSERT INTO bus_stoppage_map(bus_stoppage_map_id,bus_id,stoppage_details_id)  VALUES('','$bus_id','$stoppage_id')";
mysqli_query($conn,$query4);

?>
    