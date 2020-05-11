<?php
include("variable.php");
$conn=mysqli_connect($servername,$username,$password,$db);
$emp_id=$_GET['id'];  
if(isset($_POST['submit']))
  {
    
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $query="UPDATE employee SET employee_name='$name',contact_number='$contact',email='$email',gender='$gender' 
    WHERE employee_id='$emp_id'";
    mysqli_query($conn,$query);
  }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="\assessment2\style.css">
        
    </head>
    <body>
        
            <form  method="POST" action="">
                <div class="input-group">
                    <span id="errormessage" ></span>
                    </div>
                   
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php 
                    $query="SELECT employee_name FROM employee WHERE employee_id='$emp_id'";
                    $res=mysqli_query($conn,$query);
                    $n1=mysqli_fetch_array($res);
                    $name=$n1['employee_name'];
                    echo $name;
                    ?>"
                    autocomplete="off" id="name" >
                    <span id="name" ></span>
                  </div>
              <div class="input-group">
                <label>Contact No</label>
                <input type="text" name="contact"  autocomplete="off" id="contact" value="<?php 
                    $query="SELECT contact_number FROM employee WHERE employee_id='$emp_id'";
                    $res=mysqli_query($conn,$query);
                    $n1=mysqli_fetch_array($res);
                    $contact=$n1['contact_number'];
                    echo $contact;
                    ?>">
                <span id="user_contact" ></span>
              </div>
              <div class="input-group">
                <label>Email</label>
                <input type="text" name="email"  autocomplete="off" id="email" value="<?php 
                    $query="SELECT email FROM employee WHERE employee_id='$emp_id'";
                    $res=mysqli_query($conn,$query);
                    $n1=mysqli_fetch_array($res);
                    $email=$n1['email'];
                    echo $email;
                    ?>">
                <span id="user_email" ></span>
              </div>
              <div class="input-group">
                <label>GENDER</label>
                <select name="gender" id="gender">
                <option>SELECT</option>
                    <option>MALE</option>
                <option>FEMALE</option>
                <option>OTHERS</option>
                <span id="gender" ></span>
                </select>
                <br><br>
                <button type="submit"  class="btn" name="submit" id="submit" >UPDATE</button><br><br>
                <a href="\assessment2\admin.html">BACK</a>
              </div>

        </form>
    </body>
</html>