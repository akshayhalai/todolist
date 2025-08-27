<?php
session_start();
require_once '../conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = ($_POST['password']); // must match inserted password
    
    $query = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1");
    
    if($query->num_rows > 0){
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
    } else {
        header("Location: login.php?error=Invalid username or password");
    }
}
?>
