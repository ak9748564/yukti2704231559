<?php
if(isset($_POST['delete_category']))
{
    require_once("connection.php");
    $delete_category_id = $_POST['delete_category_id'];

    $delete = "DELETE FROM `product_categories` WHERE category_id='$delete_category_id'";

    $result = mysqli_query($conn,$delete);

    if(!$result){
        echo "Failure";
    }
    else{
        echo "<script>alert('Category Deleted Successfully');window.location.href='admin_dashboard.php';</script>";
    }
}
?>