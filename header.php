<?php
session_start();
?> 
    <header>
        <div class="bg-[#864135] w-full h-[50px] px-6 md:px-12 sm:block hidden">
            <div class="flex justify-between h-full w-full">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tag-fill fill-white rotate-90 mr-1" viewBox="0 0 16 16"><path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                    <p class="text-white text-[13px] font-medium">World's Fastest Online Shopping Destination</p>
                </div>
                <div class="flex items-center text-[13px] text-white font-medium">
                    <select class="bg-[#864135] outline-none">
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                        <option>English</option>
                    </select>
                    <div class="bg-white/50 w-[1px] h-[20px] mx-3"></div>
                    <select class="bg-[#864135] outline-none">
                        <option>USD $</option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </div>
        </div>
        <div class=" h-[70px] sm:h-[110px] w-full flex items-center justify-between px-6 md:px-12">
            <div class="lg:hidden">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list menu_icon cursor-pointer" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <div class="ml-5 sm:hidden">
                        <img src="images/logo-1644406346.jpg" alt="">
                    </div>
                </div>
                
            </div>
            <div class="sm:block hidden">
                <img src="images/logo-1644406346.jpg" alt="">
            </div>
            <div class="lg:block hidden">
                <ul class="flex items-center text-[#111] text-[14px] font-medium">
                    <li class="px-3 py-2 rounded-full hover:bg-black hover:text-white">
                        <a href="index.php" class="hover:text-white">Home</a>
                    </li>
                    <li class="px-3 py-2 rounded-full hover:bg-black hover:text-white">
                        <a href="shop.php" class="hover:text-white">Shop</a>
                    </li>
                    <li class="px-3 py-2 rounded-full hover:bg-black hover:text-white">
                        <a href="testimonials.php" class="hover:text-white">Testimonials</a>
                    </li>
                    <li class="px-3 py-2 rounded-full hover:bg-black hover:text-white">
                        <a href="about.php" class="hover:text-white">About</a>
                    </li>
                    <li class="px-3 py-2 rounded-full hover:bg-black hover:text-white">
                        <a href="contact.php" class="hover:text-white">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search cursor-pointer" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person mx-3 cursor-pointer" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                <div class="relative cursor-pointer">
                    <a href="cart.php">
                    <div class="bg-[#864135] w-[18px] h-[18px] rounded-full absolute top-[-8px] left-[10px] text-white text-[13px] font-medium flex items-center justify-center">
                        <?php echo count($_SESSION['cart']);?>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile_menu w-[280px] border text-[13px] font-medium text-[#666666] fixed top-0 h-[100vh] overflow-y-scroll bg-white left-[-100%] z-10">
        <div class="w-full flex justify-end h-[50px] p-6 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square cursor-pointer close_icon" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
        <ul class="m-5">
            <li>
                <a href="">
                    <div class="flex items-center justify-between">
                        <p>Home</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="flex items-center justify-between">
                        <p>Seude</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="flex items-center justify-between">
                        <p>Rawhide</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="flex items-center justify-between">
                        <p>Asymmetrical</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="flex items-center justify-between">
                        <p>Synthetic</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="flex items-center justify-between">
                        <p>Blog</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="flex items-center justify-between">
                        <p>Split Leather</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </li>
        </ul>
        <div class="border-t p-5">
            <div class="flex items-center justify-center">
                <label for="">Currency:&nbsp;</label>
                <select class="outline-none">
                    <option>English</option>
                    <option>English</option>
                    <option>English</option>
                    <option>English</option>
                    <option>English</option>
                </select>
            </div>
            <div class="flex items-center justify-center m-auto">
                <label for="">Language:&nbsp;</label>
                <select class="outline-none">
                    <option>USD $</option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </div>
        </div>
    </div>

    
    