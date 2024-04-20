<?php

if(isset($_POST['inv_submit'])){

    $customer_id = $_POST['companies'];
    $inv_date = $_POST['invoice_date'];
    $inv_title = $_POST['invoice_title'];
    $inv_description = $_POST['invoice_description'];
    $inv_tax = $_POST['invoice_tax'];
    $inv_amount = $_POST['invoice_amount'];
    $inv_status = $_POST['invoice_status'];


    // date validation
    if ($customer_id == "") {
      $icompenyErr = "Please select company";
    }
    else
    {
      $icompenyErr = "";
    }


    // date validation
    if (empty($inv_date)) {
      $idateErr = "Please enter date";
    }
    else
    {
      $idateErr = "";
    }


    // inv title validation
    if (empty($inv_title)) {
      $ititleErr = "Please enter invoice title";
    }
    else
    {
      $ititleErr = "";
    }


    // description validation
    if (empty($inv_description)) {
      $idescriptionErr = "Please enter invoice description";
    }
    else
    {
      $idescriptionErr = "";
    }


    // tax validation
    if (empty($inv_tax)) {
      $itaxErr = "Please enter invoice tax";
    }
    else
    {
      $itaxErr = "";
    }


    // status validation
    if (empty($inv_status)) {
      $istatustErr = "Please select invoice status";
    }
    else
    {
      $istatustErr = "";
    }


    // amount validation
    if (empty($inv_amount)) {
      $iamountErr = "Please enter invoice amount";
    }
    else
    {
      $iamountErr = "";
    }
    



    if($idateErr == '' & $ititleErr == '' & $idescriptionErr == '' & $itaxErr == '' & $istatustErr == '' & $iamountErr == ''){


      $add_invoice_query = "INSERT INTO `tbl_invoices`(`customer_id`, `inv_date`, `inv_title`, `inv_desc`, `inv_tax`, `inv_status`, `inv_amount`) 
      VALUES ('$customer_id','$inv_date','$inv_title','$inv_description','$inv_tax','$inv_status','$inv_amount')";


      if ($con->query($add_invoice_query) === TRUE) {
        header("Location: ../html/invoices_list.php");
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
  }
?>