<?php
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$query="SELECT * FROM stoppage_details";
$result=mysqli_query($conn,$query);
echo"<CENTER><table border='1'>
    <tr>
    <td>STOPPAGE_DETAILS_ID</td>
    <td>NAME</td>
    <td>DELETE</td>
    <td>UPDATE</td>
    </tr>";
    while($row=mysqli_fetch_array($result))
    {
        ?>
        
        <tr>
        <td><?php echo $row['stoppage_details_id']?></td>
        <td><?php echo $row['stoppage_name']?></td>
        
        <td><a href="delete.php?id=<?php echo $row['stoppage_details_id']?>">DELETE</a></td>
        <td><a href="update.php?id=<?php echo $row['stoppage_details_id']?>">UPDATE</a></td>
        </tr>
        <?php
        }
        ?>