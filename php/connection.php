<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_expenses";

$con = mysqli_connect($server, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}else{
    // echo "Connected";
}

?>