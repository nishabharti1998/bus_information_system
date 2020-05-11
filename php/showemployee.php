<?php
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$query="SELECT employee_id,employee_name,contact_number,email,gender FROM employee";
$result=mysqli_query($conn,$query);
$json_array=array();
echo"<CENTER><table border='1'>
   <tr>
    <td>EMPLOYEE_ID</td>
    <td>NAME</td>
    <td>CONTACT NO</td>
    <td>EMAIL</td>
    <td>GENDER</td>
    <td>DELETE</td>
    <td>UPDATE</td>
   </tr>";
while($row=mysqli_fetch_array($result))
{
    ?>
    
    <tr>
    <td><?php echo $row['employee_id']?></td>
    <td><?php echo $row['employee_name']?></td>
    <td><?php echo $row['contact_number']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['gender']?></td>
    <td><a href="deleteemployee.php?id=<?php echo $row['employee_id']?>">DELETE</a></td>
    <td><a href="updateemployee.php?id=<?php echo $row['employee_id']?>">UPDATE</a></td>
    </tr>
    <?php
    }
    ?>



