<?php

if(isset($_POST['login_btn'])){

    $login_email = $_POST['email'];
    $login_password = $_POST['password'];


    // email validation
    if (empty($login_email)) {
      $alemailErr = "Please enter email";
    }
    else
    {
      $login_email = trim($login_email);
      $login_email = stripslashes($login_email);

      // check if e-mail address is well-formed
      if (!filter_var($login_email, FILTER_VALIDATE_EMAIL)) {
        $alemailErr = "Please enter valid email address";
      }else{
        $alemailErr = "";
      }
    }


    // password validation
    if (empty($login_password)) {
      $alpasswordErr = "Please enter password";
    }
    else
    {
      $alpasswordErr = "";
    }




  if($alemailErr == '' & $alpasswordErr == ''){

    $login_query = "SELECT * FROM tbl_admin WHERE email = '$login_email' AND password='$login_password'";
    $login_query_result = $con->query($login_query);
    
    if ($login_query_result->num_rows > 0) {
      header("Location: ../html/dashboard.php");
    } else {
      $user_not_found_error = 'User not found. If you are existing user, please check your email and password. Or, try to register with us!';
      // echo '<script>alert("User not found. If you are existing user, please check your email and password. Or, try to register with us!")</script>';
    }
  }
}
?>
