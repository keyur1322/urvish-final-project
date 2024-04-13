<?php

if(isset($_POST['admin_reg_btn']))
{
 

  // echo "coming";

  $afname = $_POST['first_name'];
  $alname = $_POST['last_name'];
  $aemail = $_POST['email'];
  $apassword = $_POST['password'];
  // $acpassword = $_POST['confirm_password'];
  $adob = $_POST['dob'];


  // first name validation
  if (empty($rfname)) {
    $rfnameErr = "Please enter first name";
  }
  else
  {
    $rfnameErr = "";
  }


  // last name validation
  if (empty($rlname)) {
    $rlnameErr = "Please enter last name";
  }
  else
  {
    $rlnameErr = "";
  }


  // email validation
  if (empty($remail)) {
    $remailErr = "Please enter email";
  }
  else
  {
    $remail = trim($remail);
    $remail = stripslashes($remail);

      // check if e-mail address is well-formed
      if (!filter_var($remail, FILTER_VALIDATE_EMAIL)) {
        $remailErr = "Please enter valid email address";
      }else{
        $remailErr = "";
      }
  }


  // password validation
  if (empty($rpassword)) {
    $rpasswordErr = "Please enter password";
  }
  else
  {
    $rpasswordErr = "";
  }


  //  confirm password validation
  if (empty($rpassword)) {
    $rpasswordErr = "Please enter password";
  }
  else
  {
    $rpasswordErr = "";
  }


   //  dob validation
   if (empty($rdate)) {
    $rdateErr = "Please enter date of birth";
  }
  else
  {
    $rdateErr = "";
  }



  if($rfnameErr == '' & $rlnameErr == '' & $remailErr == '' & $rpasswordErr == '' & $rdateErr == ''){
    $sql = "INSERT INTO tbl_register (first_name, last_name, email, password, dob)
    VALUES ('$afname', '$alname', '$aemail', $apassword, '$adob')";

      if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
         // header("Location: index.html");
       } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }  
  } 
}

?>
