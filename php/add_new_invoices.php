<?php

if(isset($_post['inv_submit'])){
    $i_date = $_post['Invoice_date'];
    $i_title = $_post['Invoice_title'];
    $i_description = $_post['Invoice_description'];
    $i_tax = $_post['Invoice_tax'];
    $i_amount = $_post['Invoice_amount'];


    $invoice_query = "INSER INTO tbl_invoices (inv_date, inv_title, inv_desc, inv_tax, inv_amount)
    values('$i_date', '$i_title', '$i_description', '$i_tax', '$i_amount');"


    $data = mysqli_query($con,$invoice_query);

    if (data) {
        echo "data save";
    } else {
        echo "try again";
    }


}




?>