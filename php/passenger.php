<?php
    include("variable.php");
    $conn=mysqli_connect($servername,$username,$password,$db);
    
    $bus_no=$_POST['bus_no'];
    
        $query="SELECT bus_id FROM bus_details WHERE bus_number='$bus_no'";
        $res=mysqli_query($conn,$query);
        $n1=mysqli_fetch_array($res);
        $number=$n1['bus_id'];
        $query2="SELECT stoppage_details_id FROM bus_stoppage_map WHERE bus_id='$number'";
        $result=mysqli_query($conn,$query2);
        while($row=mysqli_fetch_array($result))
        {
            $stoppage_id=$row['stoppage_details_id'];
            $query3="SELECT stoppage_name FROM stoppage_details WHERE stoppage_details_id='$stoppage_id'";
            $result1=mysqli_query($conn,$query3);
            $res1=mysqli_fetch_array($result1);
            echo $res1['stoppage_name'].'<br>';
        }

    

?>

