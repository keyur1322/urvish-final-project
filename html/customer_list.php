<?php
  include '../php/connect.php';
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
        <li><a href="#"><i class="fa-solid fa-gauge"></i>Classifier</a></li>
        <li><a href="customer_list.php"><i class="fa-solid fa-gauge"></i>Customers</a></li>
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
        <li><a href="#"><i class="fa-solid fa-gauge"></i>Customers</a></li>
        <li><a href="#"><i class="fa-solid fa-hourglass-half"></i>Pending Expenses</a></li>
        <li><a href="#"><i class="fa-sharp fa-solid fa-square-check"></i>Expenses Overview</a></li>
        <li class="logout"><a href="#"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
      </ul><br>
    </div>
    <!-- end desktop-tablet view navbar -->
    <br>
     
    <div class="col-sm-10">
      <div class="well">
        <h4>List of customers</h4>
      </div>
        <div class="container">
          <button class="btn"><a href="customer_register.php" class="text-light">Add user</a></button>
          <table class="table table-bordered mt-5">
            <thead>
              <tr>
                <th scope="col">customer_conpany_name</th>
                <th scope="col">customer_fname</th>
                <th scope="col">customer_lname</th>
                <th scope="col">customer_mobileno</th>
                <th scope="col">customer_email</th>
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
                        <button class="btn btn-success"><a href="update.php" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="../php/delete.php?deleteid=<?php echo $row['customer_id']; ?>" class="text-light">Delete</a></button>
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

</body>
</html>
