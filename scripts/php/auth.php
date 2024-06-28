<?php 
    session_start();
    include("connect.php");

    $login = $_POST['login'];
    $password = $_POST['password'];

    $result = $conn -> query("select * from user where login='$login' and password='$password' ");
    if($result -> num_rows > 0) {
        $_SESSION['login_status'] = true;
        header('Location: ../../pages/admin.php');
    } else {
        $conn -> close();
        header('Location: /');
    }
?>