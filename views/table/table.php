<!-- <?php
include 'connect.php';
?> -->


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
        <button class="btn btn-primary my-5"><a href="http://localhost/final/urvish-final-project/views/customer_registration/" class="text-light">Add user</a>
        </button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">customer_id</th>
                <th scope="col">customer_conpany_name</th>
                <th scope="col">customer_fname</th>
                <th scope="col">customer_lname</th>
                <th scope="col">customer_mobileno</th>
                <th scope="col">customer_email</th>
              </tr>
            </thead>
            <tbody>

              <!-- <?php
              $sql="select * from 'tbl_customer'";
              $result=mysqli_query($con,$sql);
              if($result){
                $row=mysqli_fetch_assoc($result);
              }


              ?> -->

              <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr> -->
            </tbody>
          </table>
    </div>
</body>
</html>