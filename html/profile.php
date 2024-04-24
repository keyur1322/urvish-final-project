<?php

include('../php/connection.php');
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
        
        <?php
          if($user_profile_data_result->num_rows > 0){
            $user_profile_data = $user_profile_data_result->fetch_assoc();

            // echo "<pre>"; print_r($user_profile_data); echo "</pre>";
            // die;

        ?>

          <div class="col-md-4">

            <?php
            
            if(empty($user_profile_data['profile_picture'])){
              ?>
              <img style="width: 250px;" src="../images/admin_profile/dummy-profile.png" class="card-img" alt="User Photo">
              <?php
            }else{
              ?>
              <img style="width: 250px;" src="../images/admin_profile/<?php echo $user_profile_data['profile_picture'];?>" class="card-img" alt="User Photo">
              <?php
            }
            ?>

          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="profile-title">Profile Information</p>
              <form>
                <div class="col-md-6" style="padding-left: 0 !important;">
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <p><?php echo $user_profile_data['firstname']; ?></p>
                  </div>
  
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <p><?php echo $user_profile_data['lastname']; ?></p>
                  </div>
  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <p><?php echo $user_profile_data['email']; ?></p>
                  </div>
                </div>
                
                <div class="col-md-6" style="padding-left: 0 !important;">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <p><?php echo $user_profile_data['date_of_birth']; ?></p>
                  </div>
  
                  <div class="form-group">
                    <label>Gender</label>
                    <p><?php if($user_profile_data['gender'] == 1){echo "Male";}else{ echo "Female";} ?></p>
                  </div>
  
                  <div class="form-group">
                    <label>Address</label>
                    <?php
                    
                    if(empty($user_profile_data['address'])){
                      ?>
                      <p class="error">Please first add your profile!</p>
                      <?php
                    }else{
                      ?>
                      <p><?php echo $user_profile_data['address'].", ".$user_profile_data['city'].", ".$user_profile_data['country']." - ".$user_profile_data['postal_code']; ?></p>
                      <?php
                    }
                    ?>
                  </div>
                </div>
                <?php
            
                  if(empty($user_profile_data['profile_picture'])){
                    ?>
                    <button type="submit" href="#" class="btn btn-success">Add Profile</button>
                    <?php
                  }else{
                    ?>
                    <button type="submit" href="#" class="btn btn-primary">Edit Profile</button>
                    <?php
                  }
                ?>

          <div class="container">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Profile</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Select</h4>
                  </div>
                  <div class="modal-body">
                    <!-- <button type="submit" href="#" class="btn btn-success">Add Profile</button>
                    <button type="submit" href="#" class="btn btn-primary">Edit Profile</button> -->

                  <label>Address</label>
                  <textarea type="text" class="form-control" placeholder="Enter Address"></textarea><br>
          
                  <label>City</label>
                  <input type="text" class="form-control" placeholder="Enter City name"><br>
  
                  <label>Country</label>
                  <input type="text" class="form-control" placeholder="Enter Country name"><br>
  
                  <label>Postal_code</label>
                  <input type="text" class="form-control" placeholder="Enter Postal_code"><br>

                  <label>Profile_picture</label>
                  <input type="text" class="form-control" placeholder="Add Profile_picture">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div> 
          </div>
              </form>
            </div>
          </div>        
        <?php
        }
        ?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
