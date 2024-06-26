<?php
  include '../php/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="stylesheet" href="../css/common.css">

</head>
<style>
  .btn-success a, .btn-danger a, .btn-primary a{
    color: white !important;
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
        <li><a href="profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>
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
        <li><a href="profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>
        <li class="logout"><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
      </ul><br>
    </div>
    <!-- end desktop-tablet view navbar -->
    <br>
     
    <div class="col-sm-10">
      <div class="well">
        <h4>List of customers</h4>
      </div>
        <div class="">
          <button class="btn btn-primary"><a href="add_customer.php" class="text-light">Add user</a></button>
            <div class="main-table-div table-responsive">
              <table class="table table-bordered mt-5">
                <thead>
                  <tr>
                    <th scope="col">Company name</th>
                    <th scope="col">Customer first name</th>
                    <th scope="col">Customer last name</th>
                    <th scope="col">Customer mobile no</th>
                    <th scope="col">Customer email</th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php
                    $customer_get_query="select * from tbl_customer";
                    $result=$con->query($customer_get_query);
              
                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()) {
                      ?>
                        <tr>
                          <td><?php echo $row['customer_company_name']; ?></td>
                          <td><?php echo $row['customer_fname']; ?></td>
                          <td><?php echo $row['customer_lname']; ?></td>
                          <td><?php echo $row['customer_mobilenumber']; ?></td>
                          <td><?php echo $row['customer_email']; ?></td>
                          <td>
                            <button class="btn btn-success"><a href="../html/update_customer.php?id=<?php echo $row['customer_id']; ?>" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="../php/customer_delete.php?deleteid=<?php echo $row['customer_id']; ?>" class="text-light">Delete</a></button>
                          </td>
                        </tr>

                      <?php
                      }
                    }else{
                      ?>
                      <tr>
                        <td>Customer not found.</td>
                      </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
  </div>
</div>

</body>
</html>
