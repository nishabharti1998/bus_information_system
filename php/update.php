<?php
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$stoppage_id=$_GET['id'];
if(isset($_POST['submit']))
{
    
    $stoppagename=$_POST['text2'];
    $query="UPDATE stoppage_details SET stoppage_name='$stoppagename' WHERE stoppage_details_id='$stoppage_id'";
    mysqli_query($conn,$query);
    
}
?>
<html>
<head>
</head>
<body>
<form method="POST" action="">

STOPPAGE_NAME:<input type="text" name="text2" id="text2"  value="<?php 
                    $query="SELECT stoppage_name FROM stoppage_details WHERE stoppage_details_id='$stoppage_id'";
                    $res=mysqli_query($conn,$query);
                    $n1=mysqli_fetch_array($res);
                    $name=$n1['stoppage_name'];
                    echo $name;
                    ?>">
                    <br>
<button type="submit" name="submit" value="submit">UPDATE</button>
<br>
<a href="\assessment2\admin.html">BACK</a>
</form>
</body>
</html>