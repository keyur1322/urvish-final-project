<?php

if(isset($_POST['login_btn'])){

    $login_email = $_POST['email'];
    $login_password = $_POST['password'];

    $login_query = "SELECT * FROM tbl_admin WHERE email = '$login_email' AND password='$login_password'";
    $login_query_result = $con->query($login_query);
    
    if ($login_query_result->num_rows > 0) {
      header("Location: ../html/dashboard.html");
    } else {
      echo '<script>alert("User not found. If you are existing user, please check your email and password. Or, try to register with us!")</script>';
    }
}
?>
