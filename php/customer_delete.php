<?php

include 'connection.php';

if(isset($_GET['deleteid'])){

    $customer_id = $_GET['deleteid'];

    $delete_customer="delete from `tbl_customer` where customer_id='$customer_id'";
    $delete_customer_result=mysqli_query($con,$delete_customer);
    
    if($delete_customer_result){
    
        $delete_customer_inv="delete from `tbl_invoices` where customer_id='$customer_id'";
        $delete_customer_inv_result=mysqli_query($con,$delete_customer_inv);
        
        if($delete_customer_inv_result){
            header('location:../html/customer_list.php');
        }

    }else{
        die(mysqli_error($con));
    }
}


?>