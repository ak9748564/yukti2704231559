<?php
require_once "connection.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        

        $sql = "INSERT INTO users (username, password) VALUES (?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set these parameters
            // if (isset($_POST['register'])) {
            //     $name = $_POST['name'];
            //     $email = $_POST['email'];
            //     $phonenumber = $_POST['phonenumber'];
            //     $gender = $_POST['gender'];
            //     $countrycode = $_POST['countrycode'];
            //     $sql1 = "INSERT INTO users (name, email, phonenumber, gender, countrycode) VALUES ('$name','$email','$phonenumber','$gender','$countrycode')";
            //     $a = mysqli_query($conn, $sql1);

                $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
            
            
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
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
    <title>Yukti - Contact</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
<?php include "header.php";?>

    <!-- navigation -->
    <div class="flex w-full justify-center items-center bg-[#f5f5f5] h-[60px]">
        <div class="flex items-center"><p class="text-[#111] text-[13px] leading-[20px] font-medium">Home &nbsp;/&nbsp;&nbsp;</p><p class="text-[13px] ">Register</p></div>
    </div>
    <!-- Registeration Form -->
    <div class="py-[50px] px-6 bg-white">
        <div class="sm:w-[500px]  m-auto items-start">
            <p class="text-[20px] text-[#222222] leading-[24px] font-semibold">Create An Account</p>
            <div class="mt-4 border p-4">
                <div class="flex items-center">
                    <p class="text-[13px] text-[#666666] leading-[22px] font-medium">Already have an account?&nbsp;</p>
                    <a href="login.php" class="text-[13px] text-[#666666] leading-[22px] font-medium hover:text-black">Log in instead!</a>
                </div>
                <form action="register.php" method="post">
                <div class="mt-6">
                    <div class="my-2">
                        <label for="" class="w-full">Username</label>
                        <input type="text" name="username" class="border h-[40px] rounded-sm px-3 w-full outline-none">
                    </div>
                    <div class="my-2">
                        <label for="" class="w-full">Password</label>
                        <input type="password" name="password" class="border h-[40px] rounded-sm px-3 w-full outline-none">
                    </div>
                    <div class="mt-2 mb-4">
                        <label for="" class="w-full">Confirm Password</label>
                        <input type="password" name="confirm_password" class="border h-[40px] rounded-sm px-3 w-full outline-none">
                    </div>
                    <button type="submit" class="h-[40px] bg-black text-white w-[150px] text-center leading-[40px]  ">Register</button>
                </div>
                </form>
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