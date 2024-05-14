<?php

if(isset($_POST['update_btn']))
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

    if($cnameErr == '' & $cfnameErr == '' & $clnameErr == '' & $cmobileErr == '' & $cemailErr == '')
    {
      $update_customer = "UPDATE `tbl_customer` SET `customer_company_name`='$cname',`customer_fname`='$cfname',`customer_lname`='$clname',`customer_mobilenumber`='$cmobile',`customer_email`='$cemail' WHERE `customer_id`='$id'";     
      if ($con->query($update_customer) === TRUE) {
        header("Location: ../html/customer_list.php");  
      } else {
        echo "Error: " . $update_customer . "<br>" . $con->error;
      }
    }
}

?>