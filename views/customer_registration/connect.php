<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_expenses";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
  echo "not connected";
}
else{
  // echo "connect";
}

if(isset($_POST['reg_btn'])){
    $cname = $_POST['customer_company_name'];
    $cfname = $_POST['customer_fname'];
    $clname = $_POST['customer_lname'];
    $cmobile = $_POST['customer_mobilenumber'];
    $cemail = $_POST['customer_email'];

    $sql = "INSERT INTO tbl_customer (customer_company_name, customer_fname, customer_lname, customer_mobilenumber, customer_email)
    VALUES ('$cname', '$cfname', '$clname', $cmobile, '$cemail')";
    
    if ($con->query($sql) === TRUE) {
      // echo "New record created successfully";
      header("Location: index.html");

    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }

}else{
  echo "form not submit";
}




?>