<?php

if(isset($_POST['inv_submit'])){

    echo $customer_id = $_POST['companies'];
    echo "</br>"; echo $inv_date = $_POST['invoice_date'];
    echo "</br>"; echo $inv_title = $_POST['invoice_title'];
    echo "</br>"; echo $inv_description = $_POST['invoice_description'];
    echo "</br>"; echo $inv_tax = $_POST['invoice_tax'];
    echo "</br>"; echo $inv_amount = $_POST['invoice_amount'];
    echo "</br>"; echo $inv_status = $_POST['invoice_status'];

    $add_invoice_query = "INSERT INTO `tbl_invoices`(`customer_id`, `inv_date`, `inv_title`, `inv_desc`, `inv_tax`, `inv_status`, `inv_amount`) 
    VALUES ('$customer_id','$inv_date','$inv_title','$inv_description','$inv_tax','$inv_status','$inv_amount')";


    if ($con->query($add_invoice_query) === TRUE) {
      header("Location: ../html/invoices_list.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>