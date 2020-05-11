<?php
session_start();
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$pname=$_SESSION['user_name'];
$query="SELECT name,username,city,contact_no,email FROM users WHERE username='$pname'";
$result=mysqli_query($conn,$query);
echo "<table align='center'>";
while($row=mysqli_fetch_array($result))
{
    ?>
   <tr> 
    <td>Name</td>
   <td><?php echo $row['name']?></td>
</tr>
   <tr>
       <td>Username</td>
       <td><?php echo $row['username']?></td>
</tr>
   <tr>
       <td>City</td>
       <td><?php echo $row['city']?></td>
</tr>
<tr>
<td>Contact</td>
<td><?php echo $row['contact_no'] ?></td>
</tr>
<tr>
    <td>Email</td>
    <td><?php echo $row['email']?></td>
</tr>
<?php
}
?>
<a href="\assessment2\passenger.html">HOME</a>
