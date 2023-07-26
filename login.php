<?php
    include 'connection.php';

    //recieving json data from api
    $json = file_get_contents("php://input");
    $_POST = json_decode($json, true);

    
?>