<?php

$user_id = 7;

$user_profile_data_query = "SELECT * FROM tbl_admin 
                            LEFT JOIN tbl_profile 
                            ON tbl_admin.user_id = tbl_profile.user_id 
                            WHERE tbl_admin.user_id = '$user_id'";
$user_profile_data_result = $con->query($user_profile_data_query);

?>