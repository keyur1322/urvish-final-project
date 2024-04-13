<?php

include('../php/connection.php');

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
  .dropdown-div{
    display: flex;
    flex-direction: row;
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
        <li><a href="#"><i class="fa-solid fa-gauge"></i>Classifier</a></li>
        <li><a href="customer_list.php"><i class="fa-solid fa-users"></i>Customers</a></li>
        <li><a href="invoices.php"><i class="fa-solid fa-receipt"></i>Invoices</a></li>
        <li><a href="#"><i class="fa-solid fa-hourglass-half"></i>Pending Expenses</a></li>
        <li><a href="#"><i class="fa-sharp fa-solid fa-square-check"></i>Expenses Overview</a></li>
        <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
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
        <li><a href="#"><i class="fa-solid fa-gauge"></i>Classifier</a></li>
        <li><a href="customer_list.php"><i class="fa-solid fa-users"></i>Customers</a></li>
        <li><a href="invoices.php"><i class="fa-solid fa-receipt"></i>Invoices</a></li>
        <li><a href="#"><i class="fa-solid fa-hourglass-half"></i>Pending Expenses</a></li>
        <li><a href="#"><i class="fa-sharp fa-solid fa-square-check"></i>Expenses Overview</a></li>
        <li class="logout"><a href="#"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
      </ul><br>
    </div>
    <!-- end desktop-tablet view navbar -->
    <br>
     
    <div class="col-sm-10">
      <div class="well">
        <h4>Invoices</h4>
      </div>
    </div>

    <?php
    
      $get_all_company_name = 'SELECT * FROM tbl_customer';
      $get_all_company_name_result = $con->query($get_all_company_name);

    ?>

    <div class="col-sm-10 dropdown-div">
      <select class="form-select">
        <?php
          if($get_all_company_name_result->num_rows > 0){
            while($data = $get_all_company_name_result->fetch_assoc()) {
              ?>
                <option><?php echo $data['customer_company_name']; ?></option>
              <?php
            }
          }
        ?>
      </select>  
      <button class="btn btn-secondary" type="button" id="Button" aria-haspopup="true" aria-expanded="false">
        Show
      </button>
    </div>
  </div>
</div>

</body>
</html>