<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = null;
    $db_name = "Users_db";

    $mysqli = new Mysqli($db_host,$db_user,$db_pass,$db_name);

    if(!$mysqli)
        die("An error has occured while connecting to ".$db_name.". Connection Failed..");