<?php

$rfnameErr =$rlnameErr = $remailErr = $rpasswordErr = $rcpasswordErr = $rdateErr = '';
include('../php/connection.php');
include('../php/admin_register.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='../css/registration.css'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<style>
    .error{
        color: red;
    }
</style>
<body>
    <div class="main-div container-fluid row d-flex justify-content-center">
        <div class="col-xl-4 main-child-1 d-flex justify-content-center align-items-center flex-column ps-0 pe-0">
            <img src="../images/registration.jpg" class="register-img img-fluid w-100" alt="image not found">
        </div>
        <div class="col-xl-4 main-child-2 d-flex justify-content-center align-items-center flex-column pe-3 ps-3">
            <div class="register-card card shadow p-5 bg-body rounded w-100 mt-3 mb-3">
                <h2 class="fw-bold">Registration</h2>
                <p>Already registered with us? <a class="click-2" href="index.html">Login</a></p>
            <form method="post">
                <div class="mb-3">
                    <div class="row">
                        <div class="col">

                         <label>First Name</label>
                         <input type="text" class="form-control" placeholder="First Name" name="first_name">
                         <span class="error"><?php echo $rfnameErr;?></span>
                        </div>

                        <div class="col">
                         <label>Last Name</label>
                         <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                         <span class="error"><?php echo $rlnameErr;?></span>
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email address" name="email">
                    <span class="error"><?php echo $remailErr;?></span>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    <span class="error"><?php echo $rpasswordErr;?></span>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confirm_password">
                    <span class="error"><?php echo $rcpasswordErr;?></span>
                </div>

                <label for="DOB" class="form-label">Date of Birth</label>
                <input id="startDate" class="form-control" name="dob" type="date" />
                <span class="error"><?php echo $rdateErr;?></span>
                <br>

                <div class="d-grid">
                    <button class="btn-1" type="submit" name="admin_reg_btn" value="admin_reg_btn">Registration</button>
                </div>

                <div class="d-flex">
                    <div class="col-6 pe-2">
                      <button class="btn btn w-100"><i class="fab fa-google fa-1x"></i> Google </button>
                    </div>
                    <div class="col-6 pl-2">
                      <button class=" btn-2 btn w-100"><i class="fa fa-facebook-square"></i> Facebook </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>