<?php

$paddressErr = $pcityErr = $pcountryErr = $pcodeErr = $pgenderErr = '';
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

  .error{
    color: red;
  }
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
        <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
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
        <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
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
                    <p>
                      <?php 
                        if($user_profile_data['gender'] == 1)
                        {echo "Male";}
                        else
                        { echo "Female";} 
                      ?>
                    </p>
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
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myaddModal">Add Profile</button>
                      <!-- Add profile Modal Start -->
                      <div class="modal fade" id="myaddModal" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Add profile</h4>
                            </div>

                          <form method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Address</label>
                                <textarea type="text" class="form-control" placeholder="Enter Address" name="address"></textarea>
                                <span class="error"><?php echo $paddressErr;?></span>
                              </div>
                    
                              <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="Enter City name" name="city">
                                <span class="error"><?php echo $pcityErr;?></span>
                              </div>
            
                              <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Enter Country name"name="country">
                                <span class="error"><?php echo $pcountryErr;?></span>
                              </div>
            
                              <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" placeholder="Enter Postal_code"name="postal_code">
                                <span class="error"><?php echo $pcodeErr;?></span>
                              </div>
                              
                              <div class="form-group">
                                <label>Gender</label><br>
                                <input type="radio" name="profile_gender" value="1">
                                <label for="option1">Male</label>
                                <input type="radio" name="profile_gender" value="0">
                                <label for="option2">Female</label>
                                <span class="error"><?php echo $pgenderErr;?></span>
                              </div>
                              
                              <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <span class="error"><?php echo $paddressErr;?></span>
                              </div>

                              <button type="submit" class="btn btn-danger" name="add_btn" value="add_btn">Submit Profile</button>

                              </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </form>
                          </div> 
                      <!-- Add profile Modal End -->
                    <?php
                  }else{
                    ?>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myeditModal">Edit Profile</button>

                      <!-- Edit profile Modal Start -->
                      <div class="modal fade" id="myeditModal" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Edit Profile</h4>
                            </div>

                            <div class="modal-body">

                            <?php
                              
                            $edit_profile_query = "SELECT * FROM tbl_profile 
                                                  LEFT JOIN tbl_admin 
                                                  ON tbl_profile.user_id = tbl_admin.user_id 
                                                  WHERE tbl_profile.user_id = '$user_id'";
                            $edit_profile_query_result = $con->query($edit_profile_query);
              
                            if($edit_profile_query_result->num_rows > 0){
                              while($profile_data = $edit_profile_query_result->fetch_assoc()) {
                              ?>
                              <form method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="<?php echo $profile_data['firstname']; ?>" placeholder="Enter first name" name="pfname">
                                  </div>
                                  <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="<?php echo $profile_data['lastname']; ?>" placeholder="Enter last name" name="plname">
                                  </div>
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?php echo $profile_data['email']; ?>" placeholder="Enter email address" name="pemail">
                                  </div>
                                  <div class="form-group">
                                    <label>Gender</label><br>
                                    <?php
                                    
                                    if($profile_data['gender'] == 1){
                                    ?>
                                      <input type="radio" checked="checked" name="pgender" value="1">
                                      <label for="option1">Male</label>
                                      <input type="radio" name="pgender" value="0">
                                      <label for="option2">Female</label>  
                                    <?php
                                    }else{
                                    ?>
                                      <input type="radio" name="pgender" value="1">
                                      <label for="option1">Male</label>
                                      <input type="radio" checked="checked" name="pgender" value="0">
                                      <label for="option2">Female</label>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                  <div class="form-group">
                                    <label>Birth Date</label>
                                    <input type="date" class="form-control" value="<?php echo $profile_data['date_of_birth']; ?>" name="pbirthdate">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Address</label>
                                    <textarea type="text" class="form-control" placeholder="Enter Address" name="paddress"><?php echo $profile_data['address']; ?></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" value="<?php echo $profile_data['city']; ?>" placeholder="Enter City name" name="pcity">
                                  </div>
                                  <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" value="<?php echo $profile_data['country']; ?>" placeholder="Enter Country name"name="pcountry">
                                  </div>
                                  <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" value="<?php echo $profile_data['postal_code']; ?>" placeholder="Enter Postal_code"name="ppostal_code">
                                  </div>
                                  <button type="submit" class="btn btn-danger" name="edit_btn" value="edit_btn">Edit Profile</button>
                                </div>
                              </form>
                              <?php
                              }
                            }
                          ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- Edit profile Modal End -->
                    <?php
                  }
                ?>
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
