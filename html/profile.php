<?php

include('../php/profile_data.php');

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
  <link rel="stylesheet" href="../css/common.css">

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
 
  
  <style>
    .profile-card {
      padding: 2%;
      box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }
    .profile-title{
      font-size: 2rem;
      font-weight: bold;
      color: #337ab7;
    }

    .container{
      padding: 0 !important;
    }
  </style>
  

</head>
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
        <li>
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
      <li><a href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
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
       
        <li>
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
      <li><a href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
      <li class="logout"><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
      </ul><br>
    </div>
    <!-- end desktop-tablet view navbar -->
    <br>
     
    <div class="col-sm-10">
      <div class="well">
        <h4>Profile</h4>
      </div>
      <div class="card profile-card">
        <div class="row">
          <div class="col-md-4">
            <img src="https://via.placeholder.com/250" class="card-img" alt="User Photo">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="profile-title">Profile Information</p>
              <form>
                <div class="col-md-6" style="padding-left: 0 !important;">
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <p>First name will go here</p>
                  </div>
  
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <p>Last name will go here</p>
                  </div>
  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <p>Email will go here</p>
                  </div>
                </div>
                
                <div class="col-md-6" style="padding-left: 0 !important;">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <p>Birthdate will go here</p>
                  </div>
  
                  <div class="form-group">
                    <label>Gender</label>
                    <p>Gender will go here</p>
                  </div>
  
                  <div class="form-group">
                    <label>Address</label>
                    <p>Address will go here</p>
                  </div>
                </div>
                <button type="submit" href="#" class="btn btn-primary">Edit Profile</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
