<?php
    $connection = new mysqli("localhost", "rchkshrma", "hellooye", "users");
    if(!$connection){
        die("Connection Failed! ".$connection->connect_error);
    }
?>