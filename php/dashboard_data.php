<?php

$total_customers_query = "SELECT COUNT(*) AS customer_count FROM tbl_customer";
$total_customers_query_result = $con->query($total_customers_query);
$total_customers = $total_customers_query_result->fetch_assoc();

$total_paid_balance = "SELECT SUM(inv_amount) AS paid_balance FROM tbl_invoices WHERE inv_status='paid'";
$total_paid_balance_result = $con->query($total_paid_balance);
$total_paid = $total_paid_balance_result->fetch_assoc();

$total_remaining_balance = "SELECT SUM(inv_amount) AS remaining_balance FROM tbl_invoices WHERE inv_status='pending'";
$total_remaining_balance_result = $con->query($total_remaining_balance);
$total_remaining = $total_remaining_balance_result->fetch_assoc();

$total_pending_inv_query = "SELECT COUNT(*) AS pending_inv_count FROM tbl_invoices WHERE inv_status='pending'";
$total_pending_inv_query_result = $con->query($total_pending_inv_query);
$total_pending_inv = $total_pending_inv_query_result->fetch_assoc();

?>