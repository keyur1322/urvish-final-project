<?php
error_reporting(0);

$user_id = 1;

$user_profile_data_query = "SELECT * FROM tbl_admin 
                            LEFT JOIN tbl_profile 
                            ON tbl_admin.user_id = tbl_profile.user_id 
                            WHERE tbl_admin.user_id = '$user_id'";
$user_profile_data_result = $con->query($user_profile_data_query);


if(isset($_POST['add_btn'])){

    $profile_address = $_POST['address'];
    $profile_city = $_POST['city'];
    $profile_country = $_POST['country'];
    $profile_postal_code = $_POST['postal_code'];
    $profile_gender = $_POST['profile_gender'];

    $target_dir = "../images/admin_profile/";
    $file_name = $_FILES['fileToUpload']['name'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    
    move_uploaded_file($file_tmp, $target_dir . $file_name);

    // address validation
    if (empty($profile_address)) {
        $paddressErr = "Please enter profile address";
      }
      else
      {
        $paddressErr = "";
      }

      // city validation
    if (empty($profile_city)) {
        $pcityErr = "Please enter profile city";
      }
      else
      {
        $pcityErr = "";
      }

      // country validation
    if (empty($profile_country)) {
        $pcountryErr = "Please enter profile country";
      }
      else
      {
        $pcountryErr = "";
      }

      // postal code validation
    if (empty($profile_postal_code)) {
        $pcodeErr = "Please enter profile postal";
      }
      else
      {
        $pcodeErr = "";
      }

    if (empty($profile_gender)) {
        $pgenderErr = "Please select your gender";
      }
      else
      {
        $pgenderErr = "";
      }

    if($paddressErr == '' & $pcityErr == '' & $pcountryErr == '' & $pcodeErr == ''){
      $add_profile_query = "INSERT INTO `tbl_profile`(`user_id`, `gender`, `address`, `city`, `country`, `postal_code`, `profile_picture`) 
      VALUES ('$user_id', '$profile_gender', '$profile_address','$profile_city','$profile_country','$profile_postal_code', '$file_name')";

       if ($con->query($add_profile_query) === TRUE) {
        header("Location: ../html/profile.php");
       } else {
       echo "Error: " . $sql . "<br>" . $con->error;
       }
    }
}

if(isset($_POST['edit_btn'])){
  $pfname = $_POST['pfname'];
  $plname = $_POST['plname'];
  $pemail = $_POST['pemail'];
  $pgender = $_POST['pgender'];
  $pbirthdate = $_POST['pbirthdate'];
  $paddress = $_POST['paddress'];
  $pcity = $_POST['pcity'];
  $pcountry = $_POST['pcountry'];
  $ppostal_code = $_POST['ppostal_code'];

  $profile_update_admin_query = "UPDATE tbl_admin SET firstname='$pfname', lastname='$plname', email='$pemail', date_of_birth='$pbirthdate' WHERE user_id='$user_id'";
  if ($con->query($profile_update_admin_query) === TRUE) {
    
    $profile_update_query = "UPDATE tbl_profile SET gender='$pgender', address='$paddress', city='$pcity', country='$pcountry', postal_code='$ppostal_code' WHERE user_id='$user_id'";
    if ($con->query($profile_update_query) === TRUE) {
      header("Location: ../html/profile.php");
    }
  }
}

?>