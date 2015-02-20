<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_EMAIL);
    
    $query = $_SESION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
