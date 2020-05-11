<?php
    include("variable.php");
    $conn=mysqli_connect($servername,$username,$password,$db);
    
    $source=$_POST['text1'];
    $destination=$_POST['text2'];
    
    $query1="SELECT distinct(bus_details.bus_number) FROM stoppage_details INNER JOIN bus_stoppage_map ON 
    stoppage_details.stoppage_details_id=bus_stoppage_map.stoppage_details_id INNER JOIN bus_details 
    ON bus_details.bus_id=bus_stoppage_map.bus_id WHERE stoppage_details.stoppage_name='$source'";
    $result1=mysqli_query($conn,$query1);

    $query2="SELECT distinct(bus_details.bus_number) FROM stoppage_details INNER JOIN bus_stoppage_map ON 
    stoppage_details.stoppage_details_id=bus_stoppage_map.stoppage_details_id INNER JOIN bus_details 
    ON bus_details.bus_id=bus_stoppage_map.bus_id WHERE stoppage_details.stoppage_name='$destination'";
    $result2=mysqli_query($conn,$query2);

    while(($row1=mysqli_fetch_array($result1)) && ($row2=mysqli_fetch_array($result2)))
    {
      $bus1=$row1['bus_number'];
      $bus2=$row2['bus_number'];
      if($bus1===$bus2)
      echo $bus1.'<br>';

    }
    
?>

