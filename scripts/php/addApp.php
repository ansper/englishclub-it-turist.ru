<?php
    include 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $direction = $_POST['select'];
    $page = $_POST['page'];

    $conn -> query("insert into `application` (`name`, `surname`, `patronymic`, `email`, `direction`) VALUE ('$name', '$surname', '$patronymic', '$email', '$direction')");
    $_POST = array();
    
    header('Location: ../../pages/'.$page.'.php');

?>