<?php
    $dbname = 'hms';
    $host = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($host,$username,$password,$dbname);

    if(!$conn){
        echo "Connection Error".mysqli_connect_error();
    }
?>