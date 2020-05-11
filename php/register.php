<?php

class DB_CON
{
    public function connect()
	{
        include("variable.php");
    $con=mysqli_connect($servername,$username,$password,$db);
    //$this->conn=$con; 
	return $con;
	}
public function insert($name,$username,$email,$password,$role_id,$contact,$city)
{
    $conn=$this->connect();
    $hash=md5($password);
    $query="INSERT INTO users(user_id,name,username,email,password,role_id,contact_no,city) VALUES('','$name','$username','$email','$hash','$role_id','$contact','$city')";
    mysqli_query($conn,$query);
    
}
public function select_role($role)
{
    $a=$this->connect();
    $em = "SELECT role_id FROM role WHERE role_name='$role'";
    $q = mysqli_query($a,$em);
    $n = mysqli_fetch_assoc($q);
    $role_id = $n['role_id'];
    return $role_id;
}
public function select($username,$email)
{
    $con=$this->connect();
    $query="SELECT username,email FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($con, $query);
   return $result;
}

}

//$obj=new DB_CON();

//$obj->check_connection();
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password_1'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$role =$_POST['role'];
$ob=new DB_CON();
$b=$ob->select_role($role);
$res=$ob->select($username,$email);
if(mysqli_num_rows($res)!=0)
{
    http_response_code(400);
    echo "username or email already exist!";
    return false;
}
$ob->insert($name,$username,$email,$password,$b,$contact,$city);
?>
