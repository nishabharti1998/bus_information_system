<?php
    session_start();
    include ("variable.php");
    $conn = mysqli_connect($servername, $username, $password, $db);
    $username = trim($_POST['u']);
    $password = trim($_POST['p']);
    $_SESSION['user_name']=$username;

    $hash = md5($password);
    $query = "SELECT username,password from users WHERE username='$username' AND password='$hash'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 0)
    {
    http_response_code(400);
    echo "Invalid Username or Password!";
    return false;
    }

    $q = "SELECT role_id FROM users WHERE username='$username'";
    $res = mysqli_query($conn, $q);
    $a = mysqli_fetch_assoc($res);
    header('Content-Type: application/json');
    echo json_encode($a);


?>
