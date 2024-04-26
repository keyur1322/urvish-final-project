<?php

$user_id = 7;

$user_profile_data_query = "SELECT * FROM tbl_admin 
                            LEFT JOIN tbl_profile 
                            ON tbl_admin.user_id = tbl_profile.user_id 
                            WHERE tbl_admin.user_id = '$user_id'";
$user_profile_data_result = $con->query($user_profile_data_query);


if(isset($_POST['submit_btn'])){

    $profile_address = $_POST['address'];
    $profile_city = $_POST['city'];
    $profile_country = $_POST['country'];
    $profile_postal_code = $_POST['postal_code'];


    // address validation
    if (empty($profile_address)) {
        $paddressErr = "Please enter company name";
      }
      else
      {
        $paddressErr = "";
      }

      // city validation
    if (empty($profile_city)) {
        $pcityErr = "Please enter company name";
      }
      else
      {
        $pcityErr = "";
      }

      // country validation
    if (empty($profile_country)) {
        $pcountryErr = "Please enter company name";
      }
      else
      {
        $pcountryErr = "";
      }

      // postal code validation
    if (empty($profile_postal_code)) {
        $pcodeErr = "Please enter company name";
      }
      else
      {
        $pcodeErr = "";
      }

    if($paddressErr == '' & $pcityErr == '' & $pcountryErr == '' & $pcodeErr == ''){


      $add_profile_query = "INSERT INTO `tbl_profile`(`address`, `city`, `country`, `postal_code`) 
      VALUES ('$profile_address','$profile_city','$profile_country','$profile_postal_code')";

       if ($con->query($add_profile_query) === TRUE) {
        // header("Location: ../html/invoices_list.php");
       } else {
       echo "Error: " . $sql . "<br>" . $con->error;
       }


    }

}

?>