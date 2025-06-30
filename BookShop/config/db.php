<?php

$host = "localhost";
$username = "root";
$password = null;
$database = "bookstore";

try{
    $conn = new mysqli($host, $username, $password, $database);
    $conn->connect_error;
}
catch(mysql_sql_exception $err){
    die("connection failed ".$err->getMessage());
}

// echo "database connected successfully";
?>