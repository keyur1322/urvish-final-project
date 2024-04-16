<?php

if(isset($_POST['admin_reg_btn']))
{
  $afname = $_POST['first_name'];
  $alname = $_POST['last_name'];
  $aemail = $_POST['email'];
  $apassword = $_POST['password'];
  $acpassword = $_POST['confirm_password'];
  $adob = $_POST['dob'];

  // first name validation
  if (empty($afname)) {
    $rfnameErr = "Please enter first name";
  }
  else
  {
    $rfnameErr = "";
  }

  // last name validation
  if (empty($alname)) {
    $rlnameErr = "Please enter last name";
  }
  else
  {
    $rlnameErr = "";
  }

  // email validation
  if (empty($aemail)) {
    $remailErr = "Please enter email";
  }
  else
  {
    $aemail = trim($aemail);
    $aemail = stripslashes($aemail);

      // check if e-mail address is well-formed
      if (!filter_var($aemail, FILTER_VALIDATE_EMAIL)) {
        $remailErr = "Please enter valid email address";
      }else{
        $remailErr = "";
      }
  }

  // password validation
  if (empty($apassword)) {
    $rpasswordErr = "Please enter password";
  }
  else
  {
    $rpasswordErr = "";
  }

  //  confirm password validation
  if (empty($acpassword)) {
    $rcpasswordErr = "Please enter confirm password";
  }
  else
  {
    if($apassword == $acpassword){
      $rcpasswordErr = "";
    }else{
      $rcpasswordErr = "Password does not match please enter again";
    }
  }

  //  dob validation
  if (empty($adob)) {
    $rdateErr = "Please enter date of birth";
  }
  else
  {
    $rdateErr = "";
  }

  if($rfnameErr == '' & $rlnameErr == '' & $remailErr == '' & $rpasswordErr == '' & $rcpasswordErr == '' & $rdateErr == ''){
    
    $admin_register_query = "INSERT INTO tbl_register (firstname, lastname, email, password, date_of_birth)
    VALUES ('$afname', '$alname', '$aemail', '$apassword', '$adob')";

      if ($con->query($admin_register_query) === TRUE) {


        ?>
          <script type="text/javascript">
            alert("New record created successfully")
          </script>
        <?php

        // echo "New record created successfully";
        // header("Location: ../html/index.html");
       } else {
        echo "Error: " . $admin_register_query . "<br>" . $con->error;
    }
  }
}

?>
