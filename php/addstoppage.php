 <?php
     include("variable.php");
     $conn=mysqli_connect($servername,$username,$password,$db);
     if(isset($_POST['submit']))
    {
        $stoppage_id=$_POST['stoppage'];
        $stoppage_name=$_POST['stpname'];
        $query="INSERT INTO stoppage_details(stoppage_details_id,stoppage_name) VALUES('$stoppage_id','$stoppage_name')";
        mysqli_query($conn,$query);
    }

?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="\assessment2\style.css">
    </head>
        <body>
          <div class="container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="input-group">
                <label>STOPPAGE_ID:</label>
                <input type="text" id="stoppage" name="stoppage">
                </div>
                <div class="input-group">
                <label>STOPPAGE NAME:</label>
                <input type="text" id="stpname" name="stpname">
                </div>
                <div class="input-group">
                <button type="submit" value="submit" name="submit">SUBMIT</button>
                </div>
                <a href="\assessment2\admin.html">BACK</a>
          
            </form>
           </div>
        </body>
<html> 


