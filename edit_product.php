<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
?>
<?php
if(isset($_POST['edit_product']))
{
    require_once("connection.php");
    $edit_product_name = $_POST['edit_product_name'];
    $edit_product_price = $_POST['edit_product_price'];
    $edit_product_category = $_POST['edit_product_category'];
    $edit_product_id = $_POST['edit_product_id'];

    $edit_img_loc = $_FILES['edit_product_image']['tmp_name'];
    $edit_img_name = $_FILES['edit_product_image']['name'];

    move_uploaded_file($edit_img_loc,"product_images/".$edit_img_name);
    $edit_image = "product_images/".$edit_img_name;

    $update = "UPDATE `products` SET `product_name`='$edit_product_name',`product_image`='$edit_image',`product_price`='$edit_product_price',`product_category`='$edit_product_category' WHERE product_id='$edit_product_id'";

    $update_new="UPDATE products SET product_name='$edit_product_name' WHERE product_id='$edit_product_id'";

    $result = mysqli_query($conn,$update);

    if(!$result){
        echo "Failure";
    }
    else{
        echo "<script>alert('Product Updated Successfully');window.location.href='admin_dashboard.php';</script>";
    }

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

    <div class="">
        
       
                    <div class="sm:w-[500px] sm:mx-auto items-start my-10">
                        <p class="text-[20px] text-[#222222] leading-[24px] font-semibold">Edit Product</p>
                        <!-- <div class="mt-4 border p-4">
                            <div class="flex items-center">
                            <p class="text-[13px] text-[#666666] leading-[22px] font-medium">Already have an account?&nbsp;</p>
                            <a href="login.php" class="text-[13px] text-[#666666] leading-[22px] font-medium hover:text-black">Log in instead!</a>
                        </div> -->
                        <?php
                        
                            $edit_product_id_form = $_POST['edit_product_id_form'];
                       
                        require_once("connection.php");
                        $query_fetch_all_products = "SELECT * FROM products WHERE product_id='$edit_product_id_form'";
                        $all_products_fetch_results = $conn->query($query_fetch_all_products);
                        
                        if ($all_products_fetch_results->num_rows > 0) 
                        {
                            // output data of each row
                            while($row = $all_products_fetch_results->fetch_assoc()) 
                            {?>
                                <form action="edit_product.php" method="post" enctype="multipart/form-data">
                                    <div class="mt-6">
                                        <div class="my-2">
                                            <label for="" class="w-full">Product Name</label>
                                            <input type="text" name="edit_product_name" class="border h-[40px] rounded-sm px-3 w-full outline-none" value="<?php echo $row['product_name'];?>">
                                        </div>
                                        <div class="my-2">
                                            <img class="w-[250px] m-auto" src="<?php echo $row['product_image'];?>">
                                            <b class="my-3"><?php echo $row['product_image'];?></b>
                                        </div>
                                        <div class="my-2">
                                            <label for="" class="w-full">Product Image</label>
                                            <input type="file" name="edit_product_image" class="border h-[40px] rounded-sm px-3 w-full outline-none p-1 bg-white">
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <label for="" class="w-full">Product Price</label>
                                            <input type="text" name="edit_product_price" class="border h-[40px] rounded-sm px-3 w-full outline-none" value="<?php echo $row['product_price'];?>">
                                        </div>
                                        <div class="mt-2 mb-4">
                                            <label for="" class="w-full">Product Category</label>
                                            <b class="font-medium text-[#1e2329] text-[20px] my-3"><?php echo $row['product_category'];?></b>--<b class="font-normal">Previous Category</b>
                                            <select name="edit_product_category" id="" class="px-3 bg-white outline-none h-[40px] rounded-sm w-full border" >
                                                <?php
                                                    require_once("connection.php");
                                                    $query_fetch_product_categories = "SELECT * FROM product_categories";
                                                    $product_categories_fetch_results = $conn->query($query_fetch_product_categories);
                        
                                                    if($product_categories_fetch_results->num_rows > 0) 
                                                    {
                                                        // output data of each row
                                                        while($category = $product_categories_fetch_results->fetch_assoc()) 
                                                        {?>
                                                        <option value="<?php echo $category['category_name'];?>">
                                                            <?php echo $category['category_name'];?>
                                                        </option>
                                    
                                                <?php }}?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="edit_product_id" value="$edit_product_id_form">
                                        <button type="submit" class="h-[40px] bg-black text-white w-[150px] text-center leading-[40px]" name="edit_product">Edit Product</button>
                                    </div>
                                </form>
                           <?php }
                        }
                        ?>
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
    var add_product_li = document.getElementsByClassName("add_product_li")[0];
    // var edit_product_li = document.getElementsByClassName("edit_product_li")[0];
    var staff_li = document.getElementsByClassName("staff_li")[0];

    var add_product_div = document.getElementsByClassName("add_product_div")[0];
    // var edit_products = document.getElementsByClassName("edit_products")[0];
    var all_products = document.getElementsByClassName("all_products")[0];
    var staff_container = document.getElementsByClassName("staff_container")[0];
    

    all_products_li.onclick = function(){
        all_products.style.display = "block";
        staff_container.style.display = "none";
        add_product_div.style.display = "none";
    };
    staff_li.onclick = function(){
        all_products.style.display = "none";
        staff_container.style.display = "block";
        add_product_div.style.display = "none";
    };
    add_product_li.onclick = function(){
        all_products.style.display = "none";
        staff_container.style.display = "none";
        add_product_div.style.display = "block";
    };
    // edit_product_li.onclick = function(){
    //     all_products.style.display = "none";
    //     staff_container.style.display = "none";
    //     add_product_div.style.display = "block";
    // };
</script>

</body>
</html>