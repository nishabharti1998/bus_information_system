 <?php
    include("variable.php");
    $conn=mysqli_connect($servername,$username,$password,$db);
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hash=md5($password);
    $query="INSERT INTO employee(employee_id,contact_number,user_id,employee_name,gender,email,username,password)  
    VALUES('','$contact','','$name','$gender','$email','$username','$hash')";
    mysqli_query($conn,$query);
    $query1="INSERT INTO users(user_id,name,username,email,password,role_id,contact_no,city) VALUES('','','$username',
    '','$hash','2','','')";
    mysqli_query($conn,$query1);

    

?>