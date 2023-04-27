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

    <div id="carouselExampleIndicators" class="carousel slide p-4 sm:px-12 sm:pb-12" data-bs-ride="true">
        <div class="carousel-indicators mb-5">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slider1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slider2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
     <!-- Shop by Trends  -->
    <div>
        <div class="my-5">
            <p class="text-[#111111] text-[36px] leading-[40px] font-bold text-center">Shop By Trends</p>
            <div class="flex  justify-center my-5 w-full p-4">
                <div class="md:flex justify-between items-stretch w-[400px]  md:w-[90vw]">
                <div class="md:w-[20vw] flex flex-col justify-between">
                    <div class="w-full mt-4 md:mt-0"><img src="images/banner-01.jpg" alt="" class="w-[100%]"></div>
                    <div class="w-full mt-4 md:mt-0"><img src="images/banner-02.jpg" alt="" class="w-[100%]"></div>
                </div>
                <div class="md:w-[20vw] mt-4 md:mt-0"><img src="images/banner-03.jpg" alt="" class="w-[100%]"></div>
                <div class="md:w-[20vw] flex flex-col justify-between">
                    <div class="w-full mt-4 md:mt-0"><img src="images/banner-04.jpg" alt="" class="w-[100%]"></div>
                    <div class="w-full mt-4 md:mt-0"><img src="images/banner-05.jpg" alt="" class="w-[100%]"></div>
                </div>
                <div class="md:w-[20vw] mt-4 md:mt-0"><img src="images/banner-06.jpg" alt="" class="w-[100%]"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-[50px]">
        <div class="flex flex-col sm:flex-row md:w-[700px] lg:w-[1000px] m-auto  text-[16px] justify-between leading-[20px] text-center items-center">
            <div class="w-[200px] m-5 sm:m-0">
                <div>
                    <div class="w-[80px] m-auto">
                        <img src="images/truck.jpg" class="w-full">
                    </div>
                    <p class="font-semibold text-black">Free Shipping</p>
                    <p class="font-medium text-[#444444]">Send A Gift Products</p>
                </div>
            </div>
            <div class="w-[1px] h-[100px] bg-black/10"></div>
            <div class="w-[200px] m-5 sm:m-0">
                <div>
                    <div class="w-[80px] m-auto">
                        <img src="images/telecaller.jpg" class="w-full">
                    </div>
                    <p class="font-semibold text-black">24/7 Support</p>
                    <p class="font-medium text-[#444444]">On Demand Support</p>
                </div>
            </div>
            <div class="w-[1px] h-[100px] bg-black/10"></div>
            <div class="w-[200px] m-5 sm:m-0">
                <div>
                    <div class="w-[80px] m-auto">
                        <img src="images/piggy_bank.jpg" class="w-full">
                    </div>
                    <p class="font-semibold text-black">Big Savings</p>
                    <p class="font-medium text-[#444444]">On Order Of $99</p>
                </div>
            </div>
            <div class="w-[1px] h-[100px] bg-black/10"></div>
            <div class="w-[200px] m-5 sm:m-0">
                <div>
                    <div class="w-[80px] m-auto">
                        <img src="images/money.jpg" class="w-full">
                    </div>
                    <p class="font-semibold text-black">Online Payment</p>
                    <p class="font-medium text-[#444444]">Online Payment Services</p>
                </div>
            </div>
        </div>
    </div>
     <!-- Trending Products -->
    <div>
        <div class="my-5">
            <p class="text-[#111111] text-[36px] leading-[40px] font-bold text-center">Trending Products</p>
            <div class="sm:w-[500px] md:w-[700px] lg:w-[900px] xl:w-[1100px] m-auto flex flex-wrap justify-around sm:justify-between py-10">

                <div class="m-3">
                    <div class="bg-[url('images/3-piece-glass-cake-stand-set.jpg')]  bg-center bg-cover w-[250px] h-[325px] overflow-hidden">
                        <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">Vajero Billfold Leather Wall..</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>
                <div class="m-3">
                    <div class="bg-[url('images/hummingbird-notebook.jpg')]  bg-center bg-cover w-[250px] h-[325px]">
                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">Designer Tote Bags At Nei..</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>
                <div class="m-3">
                    <div class="bg-[url('images/mountain-fox-notebook.jpg')]  bg-center bg-cover w-[250px] h-[325px]">
                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">Bianchi Holsters Glock 22 L..</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>
                <div class="m-3">
                    <div class="bg-[url('images/mountain-fox-vector-graphics.jpg')]  bg-center bg-cover w-[250px] h-[325px]">
                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">Craftsmen Unisex Leather B.</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>
                <div class="m-3">
                    <div class="bg-[url('images/customizable-mug.jpg')]  bg-center bg-cover w-[250px] h-[325px]">
                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">45 Degree Angle Scabbard</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>
                <div class="m-3">
                    <div class="bg-[url('images/pack-mug-framed-poster.jpg')]  bg-center bg-cover w-[250px] h-[325px]">
                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">Oil Pull Up Geniune Leather ..</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>
                <div class="m-3">
                    <div class="bg-[url('images/brown-bear-vector-graphics.jpg')]  bg-center bg-cover w-[250px] h-[325px]">
                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">Daily Objects Tan Vegan Le..</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>
                <div class="m-3">
                    <div class="bg-[url('images/hummingbird-cushion.jpg')]  bg-center bg-cover w-[250px] h-[325px]">
                    <div class="w-[250px] h-[325px] flex flex-col justify-end ">
                            <div class="p-4 w-full flex items-center justify-between">
                                <div class="bg-black/70 hover:bg-black h-[36px] w-[36px] flex items-center justify-center rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3 fill-white" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </div>
                                <button class="bg-black/70 hover:bg-black text-white cursor-pointer px-2 py-1 text-[14px] rounded-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <a href=""><p class="text-[#666] hover:text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1">Leather Book Cover With No..</p></a>
                    <p class="text-[16px] leading-[20px] font-semibold text-center">$25.00</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Save 35% Off -->
    <div class="bg-[url('images/parallex.jpg')] min-h-[250px] h-[40vw] w-full bg-center flex items-center justify-center p-6 bg-fixed">
        <div class="">
            <p class="text-white font-bold text-center text-[25px] sm:text-[70px]">Save 35% Off</p>
            <p class="text-center text-[15px] sm:text-[18px] leading-[20px] bg-[#f2c342] px-5 sm:px-12 py-2 sm:py-3">Big Offer, Big Stock on Leather Products</p>
            <div class="flex justify-center">
                <button class="rounded-full bg-white px-4 py-2 mt-4 text-center">Shop Now</button>
            </div>
            
        </div>
    </div>
     <!-- Top Categories  -->
     <div>
        <div class="my-5">
            <p class="text-[#111111] text-[36px] leading-[40px] font-bold text-center">Top Categories</p>
            <div class="xl:w-[1100px] lg:w-[900px] md:w-[700px] sm:w-[500px] m-auto px-6">
                <div class="wrapper" style="margin: 50px 0px;">
                    <div class="carousel3 owl-carousel">
                        <div class="m-3 relative category overflow-hidden">
                            <div class="hover:scale-125 hover:transition-all">
                                <img src="images/3_thumb.jpg" class="w-full">
                            </div>
                            <div class="overlay absolute top-[1000px] w-full h-full">
                                <div class="bg-black/50 shadow-sm   w-full h-full flex items-center justify-center">
                                    <a href="">
                                        <p class="text-white text-center text-[20px] leading-[30px] font-medium">Split Leather</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white mt-4">Bonded Leather</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white">Upholstery</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 relative category overflow-hidden">
                            <div class="hover:scale-125 hover:transition-all">
                                <img src="images/18_thumb.jpg" class="w-full">
                            </div>
                            <div class="overlay absolute top-[1000px] w-full h-full">
                                <div class="bg-black/50 shadow-sm   w-full h-full flex items-center justify-center">
                                    <a href="">
                                        <p class="text-white text-center text-[20px] leading-[30px] font-medium">Synthetic</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white mt-4">Aniline Leather</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white">Bicast Leather</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 relative category overflow-hidden">
                            <div class="hover:scale-125 hover:transition-all">
                                <img src="images/4_thumb.jpg" class="w-full">
                            </div>
                            <div class="overlay absolute top-[1000px] w-full h-full">
                                <div class="bg-black/50 shadow-sm   w-full h-full flex items-center justify-center">
                                    <a href="">
                                        <p class="text-white text-center text-[20px] leading-[30px] font-medium">Bend Leather</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white mt-4">Briefcase</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white">Fullgrain wallet</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 relative category overflow-hidden">
                            <div class="hover:scale-125 hover:transition-all">
                                <img src="images/9_thumb.jpg" class="w-full">
                            </div>
                            <div class="overlay absolute top-[1000px] w-full h-full">
                                <div class="bg-black/50 shadow-sm   w-full h-full flex items-center justify-center">
                                    <a href="">
                                        <p class="text-white text-center text-[20px] leading-[30px] font-medium">Asymmetrical</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white mt-4">Houseware</p>
                                        <p class="text-[13px] leading-[20px] text-center text-white">Textile Crafts</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="mt-10">
        <div class="xl:w-[1100px] lg:w-[900px] md:w-[700px] sm:w-[500px] m-auto p-2 bg-[#f5f5f5] mt-10">
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
     <!-- Special Products  -->
    <div>
        <div class="my-5">
            <p class="text-[#111111] text-[36px] leading-[40px] font-bold text-center">Special Products</p>
            <div class="xl:w-[1100px] lg:w-[900px] md:w-[700px] sm:w-[500px] m-auto px-6">
                <div class="wrapper" style="margin: 50px 0px;">
                    <div class="carousel4 owl-carousel">
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/4-single-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Nec Intelligat...</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/3-home-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Scelerisque vestibulum..</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/2-home-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Upon of seasons earth..</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/5-single-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Viderer Voluptatum te eum</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Latest News  -->
    <div>
        <div class="my-5">
            <p class="text-[#111111] text-[36px] leading-[40px] font-bold text-center">Latest News</p>
            <div class="xl:w-[1100px] lg:w-[900px] md:w-[700px] sm:w-[500px] m-auto px-6">
                <div class="wrapper" style="margin: 50px 0px;">
                    <div class="carousel3 owl-carousel">
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/4-single-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Nec Intelligat...</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/3-home-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Scelerisque vestibulum..</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/2-home-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Upon of seasons earth..</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="bg-[url('images/4-single-default.jpg')]  bg-center bg-cover">
                                <img src="images/5-single-default.jpg" class="w-full">
                            </div>
                            <div class="p-3 relative">
                                <div class="bg-white shadow-sm p-3 relative top-[-56px] ">
                                    <a href=""><p class="hover:text-[#333] text-[#111] text-center text-[15px] leading-[20px] mt-2 mb-1 font-medium">Viderer Voluptatum te eum</p></a>
                                    <div class="text-[13px] leading-[16px] font-semibold text-center flex items-center justify-center">
                                        <a href="">
                                            <div class="flex items-center mr-2">
                                                <p class="text-[#111] hover:text-[#666]">Read More</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right ml-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                            </svg>
                                            <p class="text-[#111] hover:text-[#666] ml-2">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Company  -->
    <div>
        <div class="xl:w-[1100px] lg:w-[900px] md:w-[700px] sm:w-[500px] m-auto px-6">
            <div class="wrapper" style="margin: 50px 0px;">
                <div class="carousel1 owl-carousel">
                    <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/1.jpg" alt=""></div>
                    <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/2 (1).jpg" alt=""></div>
                    <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/3.jpg" alt=""></div>
                    <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/4.jpg" alt=""></div>
                    <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/5.jpg" alt=""></div>
                    <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/6.jpg" alt=""></div>
                    <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/7.jpg" alt=""></div>
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
</body>
</html>