<?php

$cnameErr = $cfnameErr = $clnameErr = $cmobileErr = $cemailErr = '';
include('../php/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Registration</title>
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</head>
<style>
  .error{
    color: red;
  }
</style>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Customer Registration
        </div>
        <div class="card-body">

          <form method="post">

            <div class="form-group">
              <label for="name">customer_company_name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your company name" name="customer_company_name">
              <span class="error"><?php echo $cnameErr;?></span>
            </div>

            <div class="form-group">
              <label for="name">customer_fname</label>
              <input type="text" class="form-control" id="name" placeholder="Enter fname" name="customer_fname">
              <span class="error"><?php echo $cfnameErr;?></span>
            </div>

            <div class="form-group">
              <label for="name">customer_lname</label>
              <input type="text" class="form-control" id="name" placeholder="Enter lname" name="customer_lname">
              <span class="error"><?php echo $clnameErr;?></span>
            </div>

            <div class="form-group">
              <label for="number">customer_mobilenumber</label>
              <input type="text" class="form-control" id="number" placeholder="enter number" name="customer_mobilenumber">
              <span class="error"><?php echo $cmobileErr;?></span>
            </div>

            <div class="form-group">
              <label for="email">customer_email</label>
              <input type="text" class="form-control" id="email" placeholder="enter email" name="customer_email">
              <span class="error"><?php echo $cemailErr;?></span>
            </div>

            <button type="submit" class="btn btn-primary" name="reg_btn" value="reg_btn">Registration</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
