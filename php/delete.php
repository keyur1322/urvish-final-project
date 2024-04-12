<?php

include 'connect.php';

if(isset($_GET['deleteid'])){

    $customer_id = $_GET['deleteid'];

    $sql="delete from `tbl_customer` where customer_id=$customer_id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:../html/customer_list.php');
    }else{
        die(mysqli_error($con));
    }
}


?>