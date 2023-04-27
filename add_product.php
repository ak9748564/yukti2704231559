<?php
if(isset($_POST['add_product']))
{
    require_once("connection.php");
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_id = "PDCT".uniqid();

    $img_loc = $_FILES['product_image']['tmp_name'];
    $img_name = $_FILES['product_image']['name'];

    move_uploaded_file($img_loc,"product_images/".$img_name);
    $image = "product_images/".$img_name;

    $insert = "INSERT INTO `products`(`product_name`, `product_image`, `product_price`, `product_category`,  `product_id`) VALUES ('$product_name','$image','$product_price','$product_category','$product_id')";

    $result = mysqli_query($conn,$insert);

    if(!$result)
    {
        echo "Failure";
    }
    else
    {
        echo "<script>alert('Product Added Successfully');window.location.href='admin_dashboard.php';</script>";
    }
}
?>