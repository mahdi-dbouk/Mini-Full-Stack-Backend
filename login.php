<?php
    include 'connection.php';

    //recieving json data from api
    $json = file_get_contents("php://input");
    $_POST = json_decode($json, true);

    //preparing data
    $email = $_POST['email'];
    $password = $_POST['password'];

    //database query
    $stmt_get_user = "select * from users where email = ?";
    $get_user = $mysqli->prepare($stmt_get_user);

    
?>