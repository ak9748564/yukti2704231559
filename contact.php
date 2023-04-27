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
    <title>Yukti - Contact</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
<?php include "header.php";?>

    <!-- navigation -->
    <div class="flex w-full justify-center items-center bg-[#f5f5f5] h-[60px]">
        <div class="flex items-center"><p class="text-[#111] text-[13px] leading-[20px] font-medium">Home &nbsp;/&nbsp;&nbsp;</p><p class="text-[13px] ">Contact us</p></div>
    </div>
    <!-- contact -->
    <div class="py-[50px] px-6">
        <div class="md:flex sm:w-[500px] md:w-[700px] lg:w-[900px] xl:w-[1100px] m-auto items-start">
            <div class="order-2 w-full p-3 m-3 border border-black">
                <p class="text-[18px] leading-[20px] text-[#222] ">Contact Us</p>
                <div class="sm:flex items-center my-3">
                    <label for="" class="w-[200px] shrink-0">Subject</label>
                    <select name="" id="" class="w-full border h-[35px] px-2">
                        <option value="">Customer Service</option>
                    </select>
                </div>
                <div class="sm:flex items-center my-3">
                    <label for="" class="w-[200px] shrink-0">Email Address</label>
                    <input type="text" class="w-full border h-[35px] px-3" placeholder="your@email.com">
                </div>
                <div class="sm:flex items-center my-3">
                    <label for="" class="w-[200px] shrink-0">Subject</label>
                    <input type="file" class="w-full border h-[35px] p-[2px] mr-2">
                    <label for="" class="w-[200px] shrink-0">Optional</label>
                </div>
                <div class="sm:flex  my-3">
                    <label for="" class="w-[200px] shrink-0">Message</label>
                    <textarea name="" id="" cols="30" rows="3" class="border w-full p-3" placeholder="How can we help?"></textarea>
                </div>
                <div class="flex justify-end mt-4">
                    <button class=" bg-black text-white rounded-full px-4 py-2">Send</button>
                </div>
            </div>
            <div class="order-1 md:w-[320px] border border-black p-3 m-3">
                <p class="text-[18px] leading-[20px] text-[#666] font-bold">Store Information</p>
                <div class="flex my-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <p class="ml-2 text-[13px] leading-[20px] text-[#666]">Demo Store United States</p>
                </div>
                <hr>
                <div class="flex mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <p class="ml-2 text-[13px] leading-[20px] text-[#666]">Call Us:</p>
                </div>
                <p class="text-[13px] leading-[20px] text-[#666] mb-3 ml-6">(+01)1234567890</p>
                <hr>
                <div class="flex mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                    </svg>
                    <p class="ml-2 text-[13px] leading-[20px] text-[#666]">Fax:</p>
                </div>
                <p class="text-[13px] leading-[20px] text-[#666] mb-3 ml-6">1234567890</p>
                <hr>
                <div class="flex mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg>
                    <p class="ml-2 text-[13px] leading-[20px] text-[#666]">Email us:</p>
                </div>
                <p class="text-[13px] leading-[20px] text-[#666] mb-3 ml-6">demo@gmail.com</p>
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