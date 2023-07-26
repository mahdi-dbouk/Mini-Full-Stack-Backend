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
    $$get_user->bind_param('s',$email);
    
    $fname = null;
    $lname = null;
    $user_email = null;
    $hashed_pass = null;
    //excuting query
    $get_user->execute();
    $get_user->store_result();
    $get_user->bind_result($fname, $lname, $user_email, $user_pass);
    $get_user->fetch();


    
?>