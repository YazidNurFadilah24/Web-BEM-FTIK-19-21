<?php

    $server = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $database = "db_unitas";
    
    
    $koneksi = mysqli_connect($server, $username, $password, $database)
    or die("Database tidak bisa dibuka");



?>
