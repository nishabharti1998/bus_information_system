<?php
session_start();
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$pname=$_SESSION['user_name'];
$query="SELECT employee_id,employee_name,contact_number,username,email,gender FROM employee WHERE username='$pname'";
$result=mysqli_query($conn,$query);
echo "<table align='center'>";
while($row=mysqli_fetch_array($result))
{
    ?>
   <tr> 
    <td>Employee Id:</td>
   <td><?php echo $row['employee_id']?></td>
</tr>
   <tr>
       <td>Name:</td>
       <td><?php echo $row['employee_name']?></td>
</tr>
   <tr>
       <td>Username:</td>
       <td><?php echo $row['username']?></td>
</tr>
<tr>
<td>Contact:</td>
<td><?php echo $row['contact_number'] ?></td>
</tr>
<tr>
    <td>Email:</td>
    <td><?php echo $row['email']?></td>
</tr>
<tr>
    <td>Gender:</td>
    <td><?php echo $row['gender']?></td>
</tr>

<?php
}
?>
<a href="\assessment2\employee.html">HOME</a>