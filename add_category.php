<?php
if(isset($_POST['add_category']))
{
    require_once("connection.php");
    $category_name = $_POST['category_name'];
    $category_id = "CT".uniqid();

    $insert = "INSERT INTO `product_categories`(`category_name`, `category_id`) VALUES ('$category_name','$category_id')";

    $result = mysqli_query($conn,$insert);

    if(!$result)
    {
        echo "Failure";
    }
    else
    {
        echo "<script>alert('Category Added Successfully');window.location.href='admin_dashboard.php';</script>";
    }
}
?>