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
  <link rel="stylesheet" href="../css/common.css">

</head>
<style>
  .dropdown-div{
    display: flex;
    flex-direction: row;
  }
  .error{
    margin-top: 1%;
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
        <li><a href="profile.html"><i class="fa-solid fa-user"></i>Profile</a></li>
        <li class="logout"><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
      </ul><br>
    </div>
    <!-- end desktop-tablet view navbar -->
    <br>
     
    <div class="col-sm-10">
      <div class="well">
        <h4>Invoices</h4>
      </div>
        <div class="container">
          <?php
          $get_all_company_name = 'SELECT * FROM tbl_customer';
          $get_all_company_name_result = $con->query($get_all_company_name);
          ?>

          <div class="dropdown-div">
            <form method="POST">
              <select class="form-select" name="customers">
                <option value = "" selected>Select option</option>
                <?php
                  if($get_all_company_name_result->num_rows > 0){
                    while($data = $get_all_company_name_result->fetch_assoc()) {
                      ?>
                        <option value="<?php echo $data['customer_id']; ?>"><?php echo $data['customer_company_name']; ?></option>
                      <?php
                    }
                  }
                ?>
              </select>
              <button class="btn btn-success" type="submit" name="get_invoices_btn">Get Invoices</button>
            </form>
          </div>
          <?php  
            if(isset($_POST['get_invoices_btn'])){  
              if(!empty($_POST['customers'])){
                $selected_customer_id = $_POST['customers'];

                $get_invoices = "SELECT * FROM tbl_invoices
                LEFT JOIN tbl_customer
                ON tbl_invoices.customer_id = tbl_customer.customer_id 
                WHERE tbl_invoices.customer_id = '$selected_customer_id'";

                $get_invoices_result = $con->query($get_invoices);

                if($get_invoices_result->num_rows > 0){
                ?>
                <div class="main-table-div table-responsive">
                  <table class="table table-bordered mt-5">
                    <thead>
                      <tr>
                        <th scope="col">Company name</th>
                        <th scope="col">Invoice title</th>
                        <th scope="col">Invoice Date</th>
                        <th scope="col">Invoice amount</th>
                        <th scope="col">Invoice Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $total_amount = 0;
                          $pending_amount = 0;
                          while($invoice = $get_invoices_result->fetch_assoc()) {
                            ?>
                            <tr>
                              <td><?php echo $invoice['customer_company_name']; ?></td>
                              <td><?php echo $invoice['inv_title']; ?></td>
                              <td><?php echo $invoice['inv_date']; ?></td>
                              <td><?php echo $invoice['inv_amount']; ?></td>
                              <td><?php echo $invoice['inv_status']; ?></td>
                              <td>
                                <button class="btn btn-danger" type="submit">Open Invoice</button>
                                <?php if($invoice['inv_status'] == "pending"){
                                  ?>
                                    <button class="btn btn-success" type="submit">Send Invoice</button>
                                  <?php
                                } ?>
                              </td>
                            </tr>
                            <?php
                            $amount = $invoice['inv_amount'];
                            $total_amount += $amount;
                            $company_name = $invoice['customer_company_name'];
                            $company_email = $invoice['customer_email'];

                            if($invoice['inv_status'] == "pending"){
                              $pen_amount = $invoice['inv_amount'];
                              $pending_amount += $pen_amount;
                            }
                          }
                          ?>
                          
                          <tr>
                            <td><?php echo $company_name; ?></td>
                            <td><strong>Email: </strong><?php echo $company_email; ?></td>
                            <td></td>
                            <td><strong>Total invoice amount: </strong><?php echo $total_amount; ?></td>
                            <td><strong>Pending amount: </strong><?php echo $pending_amount; ?></td>
                            <td><strong>Total paid amount: </strong><?php echo $total_amount-$pending_amount; ?></td>
                          </tr>

                          <?php
                        }else{
                          ?>
                          <p class="error">Please enter atleast one invoice!</p>
                          <?php
                        }
                      }else{
                        ?>
                        <p class="error">Please select the company!</p>
                        <?php
                      }
                    ?>
                    </tbody>
                  </table> 
                </div>  
              <?php
            }
          ?>
        </div>
    </div>
  </div>
</div>

</body>
</html>
