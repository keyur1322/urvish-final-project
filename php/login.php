<?php


if(isset($_POST['login_btn'])){

    $login_email = $_POST['email'];
    $login_password = $_POST['password'];

    $login_query = "INSERT INTO tbl_login (email, password)
    values ('login_email', 'login_password')";
    // $data = mysqli_query($con,$login_query);

    if ($con->query($login_query) === TRUE) {


        ?>
          <script type="text/javascript">
            alert("New record created successfully")
          </script>
        <?php

        // echo "New record created successfully";
        // header("Location: ../html/index.html");
       } else {
        echo "Error: " . $login_query . "<br>" . $con->error;
    }

}

?>