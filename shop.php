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
    <title>Yukti</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
    
    <?php include "header.php";?>

    <div class="">
        <div class="flex p-12">
            <div class="w-[300px] grow-0 shrink-0 p-4 border m-4">
                <p class="text-[16px] leading-[18px] text-[#111111] font-semibold">Filter By</p>
                <p class="text-[13px] leading-[28px] text-[#333333] font-semibold mt-4">Price</p>
                <div>
                    <div class="flex items-center">
                        <p>$</p>
                        <p class="product_low_price"></p>
                        <p>&nbsp;-&nbsp;</p>
                        <p>$</p>
                        <p class="product_high_price"></p>
                    </div>
                    <p>Lower Price</p>
                    <input type="range" class="w-full filter_low_price" min="1" max="99">
                    <p>higher Price</p>
                    <input type="range" class="w-full filter_high_price" min="2" max="100">

                    
                </div>
                <p class="text-[13px] leading-[28px] text-[#333333] font-semibold mt-4">Categories</p>
                <div>
                    <div class="flex items-center my-1">
                        <input type="checkbox" class="h-[16px] w-[16px] mr-2 bg-[#f2f2f2]">
                        <p class="text-[16px] leading-[20px] text-[#111111]">All</p>
                    </div>
                    <?php
                        require_once("connection.php");
                        $query_fetch_all_categories = "SELECT * FROM product_categories";
                        $all_categories_fetch_results = $conn->query($query_fetch_all_categories);
                        
                        if($all_categories_fetch_results->num_rows > 0) 
                            {
                                // output data of each row
                                while($category_select = $all_categories_fetch_results->fetch_assoc()) 
                            {?>
                            <div class="flex items-center my-1">
                                <input type="checkbox" class="h-[16px] w-[16px] mr-2 bg-[#f2f2f2]">
                                <option value="<?php echo $category_select['category_name']?>">
                                    <?php echo $category_select['category_name']?>
                                </option>
                            </div>                    
                    <?php }} ?>
                </div>
                <button class="filter_btn h-[35px] w-[100px]  bg-black text-white flex items-center justify-center mt-4">Filter</button>
            </div>
            <div class="grow shrink p-4 m-4 border">
                <div class="flex flex-wrap justify-evenly">
                    <?php
                    require_once("connection.php");
                    $query_fetch_all_products = "SELECT * FROM products";
                    $all_products_fetch_results = $conn->query($query_fetch_all_products);
                        
                    if($all_products_fetch_results->num_rows > 0) 
                    {
                        // output data of each row
                        while($row = $all_products_fetch_results->fetch_assoc()) 
                        {?>
                            <div class="m-3 product">
                                <div class="bg-[url('<?php echo $row['product_image']?>')]  bg-center bg-cover w-[250px] h-[325px] overflow-hidden">
                                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                                        <div class="p-4 w-full flex items-center justify-between">
                                            <form action="manage_cart.php" method="post">
                                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">
                                                <input type="hidden" name="product_name" value="<?php echo $row['product_name']?>">
                                                <input type="hidden" name="product_price" value="<?php echo $row['product_price']?>">
                                                <input type="hidden" name="product_image" value="<?php echo $row['product_image']?>">
                                                <input type="hidden" name="product_category" value="<?php echo $row['product_category']?>">
                                                <input type="hidden" name="product_quantity" value="1">
                                                <button class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer" name="Add_To_Cart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                    </svg>
                                                </button> 
                                            </form>
                                            <form action="manage_cart.php" method="post">
                                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">
                                                <input type="hidden" name="product_name" value="<?php echo $row['product_name']?>">
                                                <input type="hidden" name="product_price" value="<?php echo $row['product_price']?>">
                                                <input type="hidden" name="product_image" value="<?php echo $row['product_image']?>">
                                                <input type="hidden" name="product_category" value="<?php echo $row['product_category']?>">
                                                <input type="hidden" name="product_quantity" value="1">
                                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm" name="BN">Buy Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1"><?php echo $row['product_name']?></p></a>
                                <p class="text-[16px] leading-[20px] font-semibold text-center ">$<b class="product_price"><?php echo $row['product_price']?></b></p>
                            </div>
                    <?php }}?>
                    
                </div>
            </div>
        </div>
    </div>
    
    <?php include "footer.php";?>
    
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
        var filter_low_price = document.getElementsByClassName("filter_low_price")[0];
        var filter_high_price = document.getElementsByClassName("filter_high_price")[0];
        var product_low_price = document.getElementsByClassName("product_low_price")[0];
        var product_high_price = document.getElementsByClassName("product_high_price")[0];
        var product_price = document.getElementsByClassName("product_price");
        var product = document.getElementsByClassName("product");

        var filter_btn = document.getElementsByClassName("filter_btn")[0];

        product_low_price.innerText = filter_low_price.value;
        product_high_price.innerText = filter_high_price.value;

        filter_btn.addEventListener("click",function(){
            for(var i=0;i<product.length;i++)
            {
                if((filter_low_price.value-1 < product_price[i].innerText) && (product_price[i].innerText <= filter_high_price.value-1))
                {
                    product[i].style.display="block";
                }
                else
                {
                    product[i].style.display="none";
                }
            }
        });

        filter_low_price.addEventListener("change",function(){
            product_low_price.innerText = filter_low_price.value;
            // if(filter_low_price.value<filter_high_price.value){}
            // else{filter_low_price.value = filter_high_price.value-1;}
            // if(filter_high_price.value>filter_low_price.value){}
            // else{filter_high_price.value = filter_low_price.value+1;}
            // product_low_price.innerText = filter_low_price.value;
        });
        filter_high_price.addEventListener("change",function(){
            product_high_price.innerText = filter_high_price.value;
            // if(filter_low_price.value<filter_high_price.value){}
            // else{filter_low_price.value = filter_high_price.value-1;}
            // if(filter_high_price.value>filter_low_price.value){}
            // else{filter_high_price.value = filter_low_price.value+1;}
            // product_high_price.innerText = filter_high_price.value;
        });

        

    </script>

</body>
</html>