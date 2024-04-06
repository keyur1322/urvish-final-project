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

if(isset($_POST['cust_reg_btn'])){
    $cname = $_POST['customer_company_name'];
    echo $cname;

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}else{
  echo "form not submit";
}




?>