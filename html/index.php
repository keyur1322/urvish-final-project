<?php

$alemailErr = $alpasswordErr = $user_not_found_error = '';
include('../php/connection.php');
include('../php/admin_login.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   
</head>

<style>
  .error{
    color: red;
  }
</style>

<body>
  <div class="main-div row d-flex justify-content-center container-fluid">
    <!-- <div class="row box"> -->
      <div class="main-child-1 col-xl-4 d-flex justify-content-center align-items-center flex-column pe-3 ps-3">
       <div class="login-card card shadow p-5 bg-body rounded w-100 mt-3 mb-3">
        <h3 class="fw-bold">Login</h3>
        <p>Doesn't have an account?  <a class="click-1" href="registration.php">Signup</a></p>

        <form method="post">

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" placeholder="you@example.com">
            <span class="error"><?php echo $alemailErr;?></span>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>


          <div class="mb-3">
            <div class="d-flex justify-content-between">
              <label for="exampleInputPassword1" class="form-label">Password</label>  
              <a class="click-1" href="#">forget password?</a>
            </div>  
            <input type="password" class="form-control" name="password" placeholder="Enter 6 character or more">
            <span class="error"><?php echo $alpasswordErr;?></span>
          </div>


          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>

          <div class="d-grid">
            <button class="btn-1" type="submit" name="login_btn" value="login_btn">login</button>
          </div>

        </form>
        <br>
        <div class="separator">or login with</div>
        <br>
        <div class="d-flex">
          <div class="col-12 pe-2">
            <button class="btn w-100"><i class="fab fa-google fa-1x"></i> <a href="dashboard.php">Google</a></button>
          </div>
          <!-- <div class="col-6 pl-2">
            <button class=" btn-2 btn w-100"><i class="fa fa-facebook-square"></i> Facebook </button>
          </div> -->
        </div>

        <span class="error"><?php echo $user_not_found_error;?></span>
        
      </div>
      </div>
      <div class="main-child-2 col-xl-4 d-flex justify-content-center align-items-center flex-column ps-0 pe-0">
      <img src="../images/login.jpg" class="img-fluid login-img" alt="not found">
      </div>
    <!-- </div> -->
  </div>
</body>
</html>