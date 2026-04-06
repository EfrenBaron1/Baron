<?php
session_start();
require 'db.php';  

if ($_SERVER['REQUEST_MRTHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->preper("SELECT = FROM user WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['user']= $username;
        header("Location: dashboard.php");
        exist();
    } else {
        $error = "Invalid username or password";

    } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO MY PAGE</h1>
</body>
