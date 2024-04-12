<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_expenses";

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


  if(isset($_POST['registration'])){
    $afname = $_POST['fname'];
    $alname = $_POST['lname'];
    $aemail = $_POST['email'];
    $apassword = $_POST['password'];
    $acpassword = $_POST['confirm_password'];
    $adob = $_POST['dob'];


    $sql = "INSERT INTO tbl_admin (fname, lname, email, password, confirm_password, dob)
    VALUES ('$afname', '$alname', '$aemail', $apassword, '$acpassword', '$adob')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // header("Location: index.html");

      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }   










  }



  // $sql = "CREATE DATABASE myDB";
  // if ($conn->query($sql) === TRUE) {
  //   echo "Database created successfully";
  // } else {
  //   echo "Error creating database: " . $conn->error;
  // }
  










  ?>
