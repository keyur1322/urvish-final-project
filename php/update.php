<?php

include 'connection.php';

echo $id=$_GET['id'];

?>

        <div class="col-md-8 invoice-form">
          <form method="post">
            <div class="form-group">
              <label for="name">Customer Company Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your company name" name="customer_company_name">
            </div>

            <div class="form-group">
              <label for="name">Customer Firstname</label>
              <input type="text" class="form-control" id="name" placeholder="Enter fname" name="customer_fname">
            </div>

            <div class="form-group">
              <label for="name">Customer Lastname</label>
              <input type="text" class="form-control" id="name" placeholder="Enter lname" name="customer_lname">
            </div>

            <div class="form-group">
              <label for="number">Customer Mobilenumber</label>
              <input type="text" class="form-control" id="number" placeholder="enter number" name="customer_mobilenumber">
            </div>

            <div class="form-group">
              <label for="email">Customer Email</label>
              <input type="text" class="form-control" id="email" placeholder="enter email" name="customer_email">
            </div>

            <button type="submit" class="btn btn-primary" name="reg_btn" value="reg_btn">Registration</button>
          </form>
        </div>