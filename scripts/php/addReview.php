<?php
    include 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $page = $_POST['page'];

    if($patronymic == '') {
        $patronymic = NULL;
    }
    if($email == '') {
        $email = NULL;
    }

    var_dump($conn -> query("insert into `review` (`name`, `surname`, `patronymic`, `email`, `review`) VALUE ('$name', '$surname', '$patronymic', '$email', '$review')"));
    $_POST = array();
    
    header('Location: ../../pages/'.$page.'.php');

?>