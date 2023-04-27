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
    <!-- navigation -->
    <div class="flex w-full justify-center items-center bg-[#f5f5f5] h-[60px]">
        <div class="flex items-center"><p class="text-[#111] text-[13px] leading-[20px] font-medium">Home &nbsp;/&nbsp;&nbsp;</p><p class="text-[13px]">Cart</p></div>
    </div>
    <div>
        <div class="md:flex sm:w-[500px] md:w-[700px] lg:w-[900px] xl:w-[1200px] m-auto">
            <div class="grow shrink m-4 ">
                <div class="border">
                <div class="p-3 border-b">
                    <p class="text-[20px] leading-[22px] text-[#333333] font-semibold">Shopping Cart</p>
                </div>
                <div class="max-h-[400px] overflow-y-scroll">
                <table class="w-full">
                    <tbody class="w-full">
                        <?php
                        $total=0;
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $total = $total + $value['product_quantity']*$value['product_price'];
                        ?>
                        <tr class="p-1 w-full">
                            <td>
                                <div class="p-1">
                                    <img src="<?php echo $value['product_image'];?>" alt="" class="w-[100px]">
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-col justify-between h-full">
                                    <p class="text-[13px] leading-[22px] font-medium text-[#666666] hover:text-[#111111] "><?php echo $value['product_name'];?></p>
                                    <div class="flex font-semibold text-[#111111] text-[16px] leading-[20px] my-2">
                                        <p>$&nbsp;</p>
                                        <p><?php echo $value['product_price'];?></p>
                                    </div>
                                    <div class="flex font-semibold text-[#111111] text-[16px] leading-[20px]">
                                        <p>Category:&nbsp;</p>
                                        <p class="text-[13px] leading-[22px] font-medium text-[#666666] "><?php echo $value['product_category'];?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="p-2">
                                    <form action="manage_cart.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                                        <input type="number" min="1" class="h-[35px] w-[50px] border outline-none pl-2" name="product_quantity" value="<?php echo $value['product_quantity'];?>" onchange="this.form.submit()">
                                    </form>
                                    
                                </div>
                            </td>
                            <td>
                                <div class="flex font-semibold text-[#111111] text-[16px] leading-[20px] p-2">
                                    <p>$&nbsp;</p>
                                    <p><?php echo $value['product_price']*$value['product_quantity'];?></p>
                                </div>
                            </td>
                            <td>
                                <div class="flex items-center p-2">
                                    <form action="manage_cart.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                                       
                                        <button type="submit" name="removeBtn" class="ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash mr-2" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
                </div>
                
                </div>
                <div class="flex items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-left mr-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    <a href="shop.php" class="text-[#666] hover:text-[#111] text-[13px] leading-[16px] font-medium">Continue Shopping</a>
                </div>
                
            </div>
            <div class="md:w-[350px] md:grow-0 md:shrink-o m-4 ">
            <div class="w-full border p-4 mb-4 bg-[#eaecef]">
                <div class="flex items-center justify-between">
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">3</b><b class="font-normal">&nbsp;items</b></p>
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">$</b><b class="font-normal"><?php echo $total;?></b></p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">Shipping</b></p>
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">$</b><b class="font-normal">7</b></p>
                </div>
                <hr class="my-4">
                <div class="flex items-center justify-between">
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">total</b><b class="font-normal">&nbsp;(tax excl.)</b></p>
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">$</b><b class="font-normal"><?php echo $total+7;?></b></p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">total</b>
                    <b class="font-normal">&nbsp;(tax incl.)</b></p>
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">$</b><b class="font-normal"><?php echo $total+7;?></b></p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">Taxes:</b><b class="font-normal">&nbsp;</b></p>
                    <p class="text-[#414141] text-[13px] leading-[22px]"><b class="font-normal">$</b><b class="font-normal">0</b></p>
                </div>
                <div class="mt-4 flex justify-center">
                    <button class="bg-black text-white h-[35px] rounded-full w-[200px] flex items-center justify-center hover:bg-[#f0b90b]">Proceed to Checkout</button>
                </div>
            </div>
            <div class="border">
                    <div class="h-[60px] pl-[50px] flex items-center  border-b">
                        <div>
                            <p class="text-[14px] leading-[16px] text-[#111]">Security policy</p>
                            <p class="text-[14px] leading-[16px] text-[#111] font-medium">(edit with the Customer Reassurance module)</p>
                        </div>
                    </div>
                    <div class="h-[60px] pl-[50px] flex items-center  border-b">
                        <div>
                            <p class="text-[14px] leading-[16px] text-[#111]">Security policy</p>
                            <p class="text-[14px] leading-[16px] text-[#111] font-medium">(edit with the Customer Reassurance module)</p>
                        </div>
                    </div>
                    <div class="h-[60px] pl-[50px] flex items-center">
                        <div>
                            <p class="text-[14px] leading-[16px] text-[#111]">Security policy</p>
                            <p class="text-[14px] leading-[16px] text-[#111] font-medium">(edit with the Customer Reassurance module)</p>
                        </div>
                    </div>
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
<script src="cart.js"></script>
</body>
</html>