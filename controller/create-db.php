<?php
    require_once(__DIR__."/../model/database.php");
    
    $conection = new mysqli($host, $username, $password);
    
    if($conection->connect_error) {
        die("error: " . $conection->connect_error);
    }
    else {
        echo "success" . $connection->host_info;
    }
    
    $conection->close();