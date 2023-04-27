<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito+Sans:wght@200;300;400;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="input.css">

    <title>Yukti - ADMIN</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
    
    <?php include "header.php";?>

    <!-- <img src="images/dashboard-admin-template-bootstrap.jpg" alt=""> -->

    <div class="sm:flex">
        <div class="sm:w-[300px] grow-0 shrink-0 bg-[#191919] p-4 text-[#eaecef] min-h-full">
            <p class="font-bold text-[24px] ">Admin Dashboard</p>
            <ul class="mt-4">
                <li class="my-3 cursor-pointer all_products_li">
                        <div class="flex items-center h-[36px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-grid-3x3-gap mr-2" viewBox="0 0 16 16">
                                <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                            </svg>
                            <p class="text-[16px] leading-[24px] font-medium hover:text-[#f0b90b]">All Products</p>
                        </div>
                </li>
                <li class="my-3 cursor-pointer add_product_li">
                        <div class="flex items-center h-[36px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-plus mr-2" viewBox="0 0 16 16">
                                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                            </svg>
                            <p class="text-[16px] leading-[24px] font-medium hover:text-[#f0b90b]">Add Product</p>
                        </div>
                </li>
                <li class="my-3 cursor-pointer all_categories_li">
                    <div class="flex items-center h-[36px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-columns-gap mr-2" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                        </svg>
                        <p class="text-[16px] leading-[24px] font-medium hover:text-[#f0b90b]">All Categories</p>
                    </div>
                </li>
                <li class="my-3 cursor-pointer add_category_li">
                    <div class="flex items-center h-[36px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-plus mr-2" viewBox="0 0 16 16">
                            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                        </svg>
                        <p class="text-[16px] leading-[24px] font-medium hover:text-[#f0b90b]">Add Category</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="bg-[#f1f1f1] p-6 min-h-full grow shrink overflow-x-scroll">
            <div class="products_container">
                <div class="p-4 bg-white min-h-full shadow-md rounded-lg overflow-x-scroll all_products h-[360px] overflow-y-scroll">
                    <table class="min-w-[800px] w-full">
                        <thead class="">
                            <tr class="w-full">
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold min-w-[150px]">
                                Product Image
                                </th>
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold">
                                Product Name
                                </th>
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold min-w-[150px]">
                                Product Price
                                </th>
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold">
                                Product Category
                                </th>
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold">
                                Date Added
                                </th>
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold">
                                Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("connection.php");
                            $query_fetch_all_products = "SELECT * FROM products";
                            $all_products_fetch_results = $conn->query($query_fetch_all_products);
                        
                            if($all_products_fetch_results->num_rows > 0) 
                            {
                                // output data of each row
                                while($row = $all_products_fetch_results->fetch_assoc()) 
                                {?>
                                    <tr class="border-b">
                                        <td class="p-3">
                                            <img src="<?php echo $row['product_image'];?>" alt="" class="w-[100px]">
                                        </td>
                                        <td class="p-3">
                                            <p><?php echo $row['product_name'];?></p>
                                        </td>
                                        <td class="p-3">
                                            <p><?php echo $row['product_price'];?></p>
                                        </td>
                                        <td class="p-3">
                                            <p><?php echo $row['product_category'];?></p>
                                        </td>
                                        <td class="p-3">
                                            <p><?php echo $row['datetime_added'];?></p>
                                        </td>
                                        <td class="p-3">
                                            <div class="flex items-center">
                                                <form action="delete_product.php" method="post">
                                                    <input type="hidden" name="delete_product_id" value="<?php echo $row['product_id'];?>">
                                       
                                                    <button type="submit" name="delete_product" class="ml-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash mr-2" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                                <form action="edit_product.php" method="post">
                                                    <input type="hidden" name="edit_product_id_form" value="<?php echo $row['product_id'];?>">
                                                    <button class="" type="submit" name="go_to_edit_product">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }}?>
                        </tbody>
                    </table>
                </div>
                <div class="add_product_div hidden">
                    <div class="lg:w-[500px]  m-auto items-start">
                        <p class="text-[20px] text-[#222222] leading-[24px] font-semibold">Add a Product</p>
                        <!-- <div class="mt-4 border p-4">
                            <div class="flex items-center">
                            <p class="text-[13px] text-[#666666] leading-[22px] font-medium">Already have an account?&nbsp;</p>
                            <a href="login.php" class="text-[13px] text-[#666666] leading-[22px] font-medium hover:text-black">Log in instead!</a>
                        </div> -->
                        <form action="add_product.php" method="post" enctype="multipart/form-data">
                            <div class="mt-6 bg-white p-6">
                                <div class="my-2">
                                    <label for="" class="w-full">Product Name</label>
                                    <input type="text" name="product_name" class="border h-[40px] rounded-sm px-3 w-full outline-none">
                                </div>
                                <div class="my-2">
                                    <label for="" class="w-full">Product Image</label>
                                    <input type="file" name="product_image" class="border h-[40px] rounded-sm px-3 w-full outline-none p-1 bg-white">
                                </div>
                                <div class="mt-2 mb-4">
                                    <label for="" class="w-full">Product Price</label>
                                    <input type="text" name="product_price" class="border h-[40px] rounded-sm px-3 w-full outline-none">
                                </div>
                                <div class="mt-2 mb-4">
                                    <label for="" class="w-full">Product Category</label>
                                    <select name="product_category" id="" class="px-3 bg-white outline-none h-[40px] rounded-sm w-full ">
                                    <?php
                                        require_once("connection.php");
                                        $query_fetch_all_categories = "SELECT * FROM product_categories";
                                        $all_categories_fetch_results = $conn->query($query_fetch_all_categories);
                        
                                        if($all_categories_fetch_results->num_rows > 0) 
                                        {
                                            echo "<option value=''>Select Category</option>";
                                            // output data of each row
                                            while($category_select = $all_categories_fetch_results->fetch_assoc()) 
                                            {?>
                                                
                                                <option value="<?php echo $category_select['category_name']?>"><?php echo $category_select['category_name']?></option>
                                            <?php 
                                        }}
                                        
                                    ?>
                                    </select>
                                </div>
                                <button type="submit" class="h-[40px] bg-black text-white w-[150px] text-center leading-[40px]" name="add_product">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="p-4 bg-white min-h-full shadow-md rounded-lg overflow-x-scroll all_categories hidden">
                    <table class="min-w-[800px] w-full">
                        <thead class="">
                            <tr class="w-full">
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold">
                                Category Name
                                </th>
                                <th class="h-[40px] text-left py-2 px-3 text-[14px] text-[#1e2329] bg-[#eaecef] font-semibold">
                                Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("connection.php");
                            $query_fetch_product_categories = "SELECT * FROM product_categories";
                            $product_categories_fetch_results = $conn->query($query_fetch_product_categories);
                        
                            if($product_categories_fetch_results->num_rows > 0) 
                            {
                                // output data of each row
                                while($category = $product_categories_fetch_results->fetch_assoc()) 
                                {?>
                                    <tr class="border-b">
                                        <td class="p-3">
                                            <p><?php echo $category['category_name'];?></p>
                                        </td>
                                        <td class="p-3">
                                            <div class="flex items-center">
                                                <form action="delete_category.php" method="post">
                                                    <input type="hidden" name="delete_category_id" value="<?php echo $category['category_id'];?>">
                                       
                                                    <button type="submit" name="delete_category" class="ml-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash mr-2" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                                <form action="edit_category.php" method="post">
                                                    <input type="hidden" name="category_id" value="<?php echo $category['category_id'];?>">
                                                    <button class="" type="submit" name="go_to_edit_category">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }}?>
                        </tbody>
                    </table>
                </div>
                <div class="add_category_div hidden">
                    <div class="lg:w-[500px]  m-auto items-start">
                        <p class="text-[20px] text-[#222222] leading-[24px] font-semibold">Add a Category</p>
                        <!-- <div class="mt-4 border p-4">
                            <div class="flex items-center">
                            <p class="text-[13px] text-[#666666] leading-[22px] font-medium">Already have an account?&nbsp;</p>
                            <a href="login.php" class="text-[13px] text-[#666666] leading-[22px] font-medium hover:text-black">Log in instead!</a>
                        </div> -->
                        <form action="add_category.php" method="post" enctype="multipart/form-data">
                            <div class="mt-6 p-6 bg-white">
                                <div class="my-2">
                                    <label for="" class="w-full">Category Name</label>
                                    <input type="text" name="category_name" class="border h-[40px] rounded-sm px-3 w-full outline-none">
                                </div>
                                <button type="submit" class="h-[40px] bg-black text-white w-[150px] text-center leading-[40px]" name="add_category">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php";?> 
    
    <!-- sidebar background #2a3143 -->
    <!-- sidebar color #c0c5f1 -->
    <!-- container background #f1f1f1 -->
    <!-- container color #a2a2a2 -->
    <script>
        var menu_icon = document.getElementsByClassName("menu_icon")[0];
        var close_icon = document.getElementsByClassName("close_icon")[0];
        var mobile_menu = document.getElementsByClassName("mobile_menu")[0];

        menu_icon.onclick = function(){
            mobile_menu.style.left = "0px";
            mobile_menu.style.transition = "0.4s";
        }
        close_icon.onclick = function(){
            mobile_menu.style.left = "-100%";
            mobile_menu.style.transition = "0.4s";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script>
        $(".carousel1").owlCarousel({
            loop: true,
            margin: 50,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: 2,
                },
                675: {
                    items: 3,
                }
                ,
                820: {
                    items: 4,
                },
                970: {
                    items: 6,
                }

            }
        })

        $(".carousel2").owlCarousel({
            loop: true,
            margin: 50,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                4000: {
                    items: 1,
                },
                // 675: {
                //     items: 3,
                // }
                // ,
                // 820: {
                //     items: 4,
                // },
                // 970: {
                //     items: 6,
                // }

            }
        })

        $(".carousel3").owlCarousel({
            loop: false,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                700: {
                    items: 3,
                },
                1000: {
                    items: 3,
                }
                ,
                1400: {
                    items: 4,
                },
                2000: {
                    items: 6,
                }

            }
        })

        $(".carousel4").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                700: {
                    items: 3,
                },
                1000: {
                    items: 3,
                }
                ,
                1300: {
                    items: 4,
                },
                2000: {
                    items: 6,
                }

            }
        })
    </script>

<script>
    var category = document.getElementsByClassName("category");
    var overlay = document.getElementsByClassName("overlay");

    category[0].addEventListener("mouseover",function(){
      overlay[0].style.top = "0px";
      overlay[0].style.transition = "1s";
    });
    category[0].addEventListener("mouseout",function(){
      overlay[0].style.top = "1000px";
      overlay[0].style.transition = "1s";
    });

    category[1].addEventListener("mouseover",function(){
      overlay[1].style.top = "0px";
      overlay[1].style.transition = "1s";
    });
    category[1].addEventListener("mouseout",function(){
      overlay[1].style.top = "1000px";
      overlay[1].style.transition = "1s";
    });

    category[2].addEventListener("mouseover",function(){
      overlay[2].style.top = "0px";
      overlay[2].style.transition = "1s";
    });
    category[2].addEventListener("mouseout",function(){
      overlay[2].style.top = "1000px";
      overlay[2].style.transition = "1s";
    });

    category[3].addEventListener("mouseover",function(){
      overlay[3].style.top = "0px";
      overlay[3].style.transition = "1s";
    });
    category[3].addEventListener("mouseout",function(){
      overlay[3].style.top = "1000px";
      overlay[3].style.transition = "1s";
    });
</script>
<script>
    var all_products_li = document.getElementsByClassName("all_products_li")[0];
    var all_categories_li = document.getElementsByClassName("all_categories_li")[0];
    var add_product_li = document.getElementsByClassName("add_product_li")[0];
    var add_category_li = document.getElementsByClassName("add_category_li")[0];

    var all_products = document.getElementsByClassName("all_products")[0];
    var add_product_div = document.getElementsByClassName("add_product_div")[0];
    var all_categories = document.getElementsByClassName("all_categories")[0];
    var add_category_div = document.getElementsByClassName("add_category_div")[0];
    

    all_products_li.onclick = function(){
        all_products.style.display = "block";
        add_product_div.style.display = "none";
        all_categories.style.display = "none";
        add_category_div.style.display = "none";
    };
    add_product_li.onclick = function(){
        all_products.style.display = "none";
        add_product_div.style.display = "block";
        all_categories.style.display = "none";
        add_category_div.style.display = "none";
    };
    all_categories_li.onclick = function(){
        all_products.style.display = "none";
        add_product_div.style.display = "none";
        all_categories.style.display = "block";
        add_category_div.style.display = "none";
    };
    add_category_li.onclick = function(){
        all_products.style.display = "none";
        add_product_div.style.display = "none";
        all_categories.style.display = "none";
        add_category_div.style.display = "block";
    };
    
</script>

</body>
</html>