<?php

$icompenyErr = $idateErr = $ititleErr = $idescriptionErr = $itaxErr = $istatustErr = $iamountErr = '';
include('../php/connection.php');
include('../php/invoice_add.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 
</head>

<style>
    .error{
        color: red;
    }
</style>


<body>
<!-- start mobile view navbar -->
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid my-sidenav-1">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-face-smile"style="color:white !important;"></i>ADMIN</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="edit collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav my-nav-1">
        <li><a href="dashboard.html"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
        <li><a href="customer_list.php"><i class="fa-solid fa-users"></i>Customers</a></li>
        <li class="active">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-receipt"></i>Invoices</a>
          <ul class="collapse list-unstyled" id="homeSubmenu1">
            <li>
              <a href="add_invoices.php">Add invoices</a>
            </li>
            <li>
              <a href="invoices_list.php">Check invoices</a>
            </li>
          </ul>
        </li>
        <li><a href="profile.html"><i class="fa-solid fa-user"></i>Profile</a></li>
        <li><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- end mobile view navbar -->

<div class="container-fluid main-div">
  <div class="row content">
    <!-- start desktop-tablet view navbar -->
    <div class="col-sm-2 sidenav hidden-xs my-sidenav">
      <div class="logo-div">
        <i class="fa-solid fa-face-smile fa-2x" style="color:white !important;"></i>
        <p class="logo-txt">ADMIN</p>
      </div>
      
      <p class="nav-title">OPTIONS</p>
      <ul class="nav nav-pills nav-stacked my-nav">
        <li><a href="dashboard.html"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
        <li><a href="customer_list.php"><i class="fa-solid fa-users"></i>Customers</a></li>
       
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-receipt"></i>Invoices</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                  <a href="add_invoices.php">Add invoices</a>
              </li>
              <li>
                  <a href="invoices_list.php">Check invoices</a>
              </li>
          </ul>
        </li>
        <li><a href="profile.html"><i class="fa-solid fa-user"></i>Profile</a></li>
        <li class="logout"><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
      </ul><br>
    </div>
    <!-- end desktop-tablet view navbar -->
    <br>
     
    <div class="col-sm-10">
      <div class="well">
        <h4>Add Invoice</h4>
      </div>
      <div>

      <?php
    
      $get_all_company_data = 'SELECT * FROM tbl_customer';
      $get_all_company_data_result = $con->query($get_all_company_data);

      ?>

      <form method="post">
        <div class="form-group">
          <label>Customer Company</label><br>
          <select class="form-select" name="companies">
          <option value = "" selected>Select option</option>
          <?php
            if($get_all_company_data_result->num_rows > 0){
              while($company = $get_all_company_data_result->fetch_assoc()) {
                ?>
                  <option value="<?php echo $company['customer_id']; ?>"><?php echo $company['customer_company_name']; ?></option>
                <?php
              }
            }
          ?>
        </select><br>
        <span class="error"><?php echo $icompenyErr;?></span>  
      </div>

        <div class="form-group">
          <label>Invoice date</label>
          <input type="date" class="form-control" placeholder="Enter invoice date" name="invoice_date">
          <span class="error"><?php echo $idateErr;?></span>
        </div>

        <div class="form-group">
          <label>Invoice title</label>
          <input type="text" class="form-control" placeholder="Enter invoice title" name="invoice_title">
          <span class="error"><?php echo $ititleErr;?></span>
        </div>

        <div class="form-group">
          <label>Invoice description</label>
          <textarea type="text" class="form-control" placeholder="Enter invoice description" name="invoice_description"></textarea>
          <span class="error"><?php echo $idescriptionErr;?></span>
        </div>

        <div class="form-group">
          <label>Invoice tax</label>
          <input type="text" class="form-control" placeholder="Enter invoice tax" name="invoice_tax">
          <span class="error"><?php echo $itaxErr;?></span>
        </div>

        <div class="form-group">
            <label>Invoice status</label><br>
            <input type="radio" name="invoice_status" value="paid">
            <label for="option1">Paid</label>
            <input type="radio" name="invoice_status" value="pending">
            <label for="option2">Pending</label><br>
            <span class="error"><?php echo $istatustErr;?></span>
        </div>

        <div class="form-group">
            <label>Invoice amount</label>
            <input type="text" class="form-control" placeholder="Enter invoice amount" name="invoice_amount">
            <span class="error"><?php echo $iamountErr;?></span>
        </div>

        <button type="submit" class="btn btn-primary" value="inv_submit" name="inv_submit">Add Invoices</button>
      </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
