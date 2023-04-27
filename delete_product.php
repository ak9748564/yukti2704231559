<?php
if(isset($_POST['delete_product']))
{
    require_once("connection.php");
    $delete_product_id = $_POST['delete_product_id'];

    $delete = "DELETE FROM `products` WHERE product_id='$delete_product_id'";

    $result = mysqli_query($conn,$delete);

    if(!$result){
        echo "Failure";
    }
    else{
        echo "<script>alert('Product Deleted Successfully');window.location.href='admin_dashboard.php';</script>";
    }
}
?>