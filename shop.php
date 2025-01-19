<?php
    require_once("confiq\conection.php");
$sql = "SELECT * FROM book";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Shop || CAR DEALERSHIP</title>
</head>
<body>
    <!-- nav -->
    <div class="flex flex-col items-center text-gray-500">
        <img class="md:hidden" src="photo/logo.jpg" alt="">
        <div class="flex md:justify-between justify-center items-center w-9/12 m-auto gap-4">
            <div class="flex gap-4">
                <a href="index.php" class="hover:scale-110 hover:font-semibold hover:text-black">Home</a>
                <a href="shop.php" class="font-semibold text-black">Shop</a>
            </div>
            <img class="hidden md:block" src="photo/logo.jpg" alt="">
            <div class="flex gap-4">
                <a class="hover:scale-110 hover:font-semibold hover:text-black">Contact</a>
                <a class="hover:scale-110 hover:font-semibold hover:text-black">About Us</a>
                <a href="login.php" class="hover:scale-110 hover:font-semibold hover:text-black">Profile</a>
            </div>
        </div>
    </div>
    <!-- hero -->
    <div class="flex flex-col items-center">
        <p class="text-[3em] font-semibold">Book Showcase</p>
        
        <div class="p-1 flex flex-wrap items-center justify-center">
            <?php
                $cnt = 0;
                while ($row = mysqli_fetch_array($result)) {
                    if ($cnt >= 3) break; 
                    $cnt++;
            ?>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                    style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                        style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                    </div>
                    <img class="relative w-40" src="<?php echo $row['image']?>" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1"><?php echo $row['category']?></span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-sm"><?php echo $row['name']?></span>
                        <span class=" bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$<?php echo $row['price']?></span>
                    </div>
                    <div class="">
                        <button class=" bg-white rounded-full text-orange-500 text-xs text-center font-bold px-3 py-2 leading-none flex items-center w-full mt-4">Order Now</button>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

        </div>
    </div>
    <!-- footer -->
    <div class="flex flex-col md:flex-row md:justify-between md:w-9/12 m-auto items-center">
        <div class="flex flex-col items-center md:items-start gap-4  md:mt-14 mt-7">
            <h4 class="font-semibold">Subscribe To The Newsletter</h4>
            <div class="flex scale-x-125 border-2 rounded-full">
                <input class="rounded-l-full pl-3" type="email" placeholder="Enter Your Email">
                <img class="p-3 bg-orange-500 rounded-r-full" src="photo/arrow-right-white.png" alt="">
            </div>
            <div class=" flex items-center gap-4 mb-8 md:0">
                <a href="#" class="fa fa-facebook bg-blue-500 hover:bg-blue-700 text-white py-3 px-4 rounded-full"></a>
                <a href="#" class="fa fa-twitter bg-blue-500 hover:bg-blue-700 text-white py-3 px-3 rounded-full"></a>
                <a href="#" class="fa fa-linkedin bg-blue-500 hover:bg-blue-700 text-white py-3 px-3 rounded-full"></a>
            </div>
        </div>
        <div class="flex justify-between p-8 md:p- pt-0 w-11/12 md:w-6/12 text-gray-500">
            <div class="flex flex-col gap-4">
                <h3 class="text-black font-bold">Buying & Selling</h3>
                <div class="">
                    <p>Find A Book</p>
                    <p>Listings By City</p>
                    <p>Sell Your Book</p>
                    <p>Compae Side by Side</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h3 class="text-black font-bold">Resource</h3>
                <div class="">
                    <p>Blog</p>
                    <p>Guides</p>
                    <p>FAQ</p>
                    <p>Help Center</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h3 class="text-black font-bold">Company</h3>
                <div class="">
                    <p>Company</p>
                    <p>Career</p>
                    <p>Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- lower footer -->
    <div class="">
        <div class="text-gray-500 px-4 flex flex-col items-center md:flex-row md:justify-between md:w-9/12 m-auto md:p-4 ">
            <div class="">
                <p>© 2023 Book Leadership</p>
            </div>
            <div class="flex justify-between md:gap-14">
                <p>Terms of Service</p>
                <p>Privacy Policy</p>
                <p>Trust & Safety</p>
                <p>Law Enforcement</p>
            </div>
            <div class="flex gap-2">
                <p>Develop By: </p>
                <a href="https://www.facebook.com/ebrahim.islam.2003">M.Ebrahim Islam Shuvo</a>
            </div>
        </div>
    </div>
</body>
</html>