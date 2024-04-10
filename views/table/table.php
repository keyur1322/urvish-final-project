<?php
  include '../customer_registration/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="../customer_registration/index.php" class="text-light">Add user</a>
        </button>
        <table class="table table-bordered">
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
                        <!-- <button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button> -->
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$row['customer_id']" class="text-light">Delete</a></button>
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
</body>
</html>