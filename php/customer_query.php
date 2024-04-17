<?php

if(isset($_POST['reg_btn']))
{
    $cname = $_POST['customer_company_name'];
    $cfname = $_POST['customer_fname'];
    $clname = $_POST['customer_lname'];
    $cmobile = $_POST['customer_mobilenumber'];
    $cemail = $_POST['customer_email'];


    // company name validation
    if (empty($cname)) {
      $cnameErr = "Please enter company name";
    }
    else
    {
      $cnameErr = "";
    }

    // company first name validation
    if (empty($cfname)) {
      $cfnameErr = "Please enter first name";
    }
    else
    {
      $cfnameErr = "";
    }

    // company last name validation
    if (empty($clname)) {
      $clnameErr = "Please enter last name";
    }
    else
    {
      $clnameErr = "";
    }

    // company mobile no validation
    if (empty($cmobile)) {
      $cmobileErr = "Please enter mobile number";
    }
    else
    {
      $mobileregex = "/^[6-9][0-9]{9}$/" ;  
      if(preg_match($mobileregex, $cmobile) === 1){
        $cmobileErr = "";
      }else{
        $cmobileErr = "Please enter valid 10 digit mobile number";
      }
    }

    // company email validation
    if (empty($cemail)) {
      $cemailErr = "Please enter email address";
    }
    else
    {
      $cemail = trim($cemail);
      $cemail = stripslashes($cemail);

      // check if e-mail address is well-formed
      if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
        $cemailErr = "Please enter valid email address";
      }else{
        $cemailErr = "";
      }
    }

    if($cnameErr == '' & $cfnameErr == '' & $clnameErr == '' & $cmobileErr == '' & $cemailErr == ''){
      $sql = "INSERT INTO tbl_customer (customer_company_name, customer_fname, customer_lname, customer_mobilenumber, customer_email)
      VALUES ('$cname', '$cfname', '$clname', $cmobile, '$cemail')";
      
      if ($con->query($sql) === TRUE) {

        ?>
          <script type="text/javascript">
            alert("New record created successfully")
          </script>
        <?php

        // echo "New record created successfully";
        // header("Location: index.php");
  
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
}

?>