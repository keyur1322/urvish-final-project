<?php

include '../customer_registration/connect.php';


$sql = "delete from table_customer where id=2";

if (mysqli_query($con, $sql)) {
    echo "delete";
}else{
    echo "error" . mysqli_error($con);
}
   



// if(isset($_get['deleteid'])){
//     $customer_id=$_get['deleteid'];

//     $sql="delete from `tbl_customer` where id=$customer_id";
//     $result=mysqli_query($con,$sql);
//     if($result){
//         echo "deleted";
//         header('location:table.php');
//     }else{
//         die(mysqli_error($con));
//     }
// }


?>