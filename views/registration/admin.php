<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_expenses";

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";


  $sql = "CREATE DATABASE myDB";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  










  ?>
