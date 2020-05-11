    <?php
    include("variable.php");
    $conn=mysqli_connect($servername,$username,$password,$db);
    $query="SELECT stoppage_name FROM stoppage_details";
    $result=mysqli_query($conn,$query);
    ?>