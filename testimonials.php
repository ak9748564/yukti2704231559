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
    <title>Yukti - Testimonials</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <?php include "header.php";?>
    
    <!-- Testimonials -->
    <div class="mt-10">
        <div class="xl:w-[1100px] lg:w-[900px] md:w-[700px] sm:w-[500px] m-auto p-2 bg-[#f5f5f5] mt-10">
            <p class="text-[#222] text-[20px] leading-[24px] my-2 font-semibold text-center">Our Customers Testimonials</p>
            <div class="wrapper" style="margin: 10px;">
                <div class="carousel2 owl-carousel">
                    <div style="background: white;padding:25px;border:1px solid #ececec;align-items: center; justify-content: space-between;" class="sm:flex h-full">
                        <div class="flex items-center justify-center">
                            <div class="flex min-w-[80px] min-h-[80px] rounded-full p-[6px] border shadow-sm">
                                <div class="">
                                    <img src="images/01.jpg" alt="" class="rounded-full">
                                </div>
                            </div>
                            <div class="min-w-[150px] ml-3">
                                <p class="text-[#864135] text-[16px] leading-[20px] font-bold">Mily Vefa</p>
                                <p class="text-[#111111] text-[13px] leading-[20px]">Ceo & Founder</p>
                            </div>
                            <div class="relative min-w-[40px]">
                                <div class="w-[1px] h-[100px] bg-black/50"></div>
                                <div class="bg-[#f2c342] h-[40px] w-[40px] rounded-full text-[40px] absolute top-[30px]  left-[-18px] text-center leading-[55px]">""</div>
                            </div>
                        </div>
                        
                        <div class="mt-5 sm:mt-0">
                            "Duis faucibus enim vitae nunc molestie, nec facilisis arcu pulvinar. Nullam mattis arcu convallis, bibendum dui ac, laoreet est. Vivamus interdum egestas rutrum. Quisque laoreet ante sed placerat imperdiet."
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
      overlay[0].style.transition = "0.4s";
    });
    category[0].addEventListener("mouseout",function(){
      overlay[0].style.top = "1000px";
      overlay[0].style.transition = "0.4s";
    });

    category[1].addEventListener("mouseover",function(){
      overlay[1].style.top = "0px";
      overlay[1].style.transition = "0.4s";
    });
    category[1].addEventListener("mouseout",function(){
      overlay[1].style.top = "1000px";
      overlay[1].style.transition = "0.4s";
    });

    category[2].addEventListener("mouseover",function(){
      overlay[2].style.top = "0px";
      overlay[2].style.transition = "0.4s";
    });
    category[2].addEventListener("mouseout",function(){
      overlay[2].style.top = "1000px";
      overlay[2].style.transition = "0.4s";
    });

    category[3].addEventListener("mouseover",function(){
      overlay[3].style.top = "0px";
      overlay[3].style.transition = "0.4s";
    });
    category[3].addEventListener("mouseout",function(){
      overlay[3].style.top = "1000px";
      overlay[3].style.transition = "0.4s";
    });
</script>

</body>
</html>