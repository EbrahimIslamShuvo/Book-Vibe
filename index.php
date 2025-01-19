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
    <title> HOME || CAR DEALERSHIP</title>
</head>
<body>
    <!-- nav -->
    <div class="flex flex-col items-center text-gray-500">
        <img class="md:hidden" src="photo/logo.jpg" alt="">
        <div class="flex md:justify-between justify-center items-center w-9/12 m-auto gap-4">
            <div class="flex gap-4">
                <a href="index.php" class="font-semibold text-black">Home</a>
                <a href="shop.php" class="hover:scale-110 hover:font-semibold hover:text-black">Shop</a>
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
    <div class="relative">
        <div class="flex w-full justify-center pt-8">
            <img class="absolute -z-10 -top-24 w-6/12 opacity-50" src="photo/hero-bg.jpg" alt="">
        </div>
            
        <div class="flex flex-col md:flex-row md:items-center md:justify-between md:w-9/12 m-auto">
            <div class="flex flex-col items-start">
                <h4 class="text-[2.75em] font-bold">Welcome To The</h4>
                <div class="flex md:flex-col lg:flex-col gap-0 items-start">
                    <h2 class="text-[4em] text-red-800 font-bold">Heaven of Book</h2>
                    <button class="bg-[#100E34] text-white px-5  py-3 rounded-full">Order Now ></button>
                </div>
            </div>
            <img class="pt-4" src="photo/hero.png" alt="">
        </div>
    </div>



    <div class="">
        <p class="text-[3em] font-semibold text-center">BOOK</p>
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
                        <a href="payment.php?name=<?php echo urlencode($row['name']); ?>" class=" bg-white rounded-full text-orange-500 text-xs text-center font-bold px-3 py-2 leading-none flex items-center w-full mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

        </div>
    </div>










    <!-- cart -->
    
    <!-- Services -->
    <div class="flex flex-col items-center gap-4 my-14">
        <h2 class="text-[3em] font-semibold">OUR SERVICES</h2>
        <h4 class="text-[.8em] text-gray-500">we Provide many of the best servises for you  and you will get the best benefits here</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-0 md:justify-between w-8/12">
            <div class="shadow-gray-500 shadow-lg w-9/12 md:w-9/12 m-auto p-4 flex flex-col items-start gap-4 rounded-lg">
                <img class="w-[80px]" src="photo/book-icon.png" alt="">
                <h4 class="font-bold">Top Quality Book</h4>
                <p class="text-gray-500">we Provide many of the best servises for you and you will get the best benefits here</p>
            </div>
            <div class="shadow-gray-500 shadow-lg w-9/12 md:w-9/12 m-auto p-4 flex flex-col items-start gap-4 rounded-lg">
                <img src="photo/wallet.png" alt="">
                <h4 class="font-bold">Top Easy payment</h4>
                <p class="text-gray-500">we Provide many of the best servises for you and you will get the best benefits here</p>
            </div>
            <div class="shadow-gray-500 shadow-lg w-9/12 md:w-9/12 m-auto p-4 flex flex-col items-start gap-4 rounded-lg">
                <img src="photo/bus.png" alt="">
                <h4 class="font-bold">Easy to use</h4>
                <p class="text-gray-500">we Provide many of the best servises for you and you will get the best benefits here</p>
            </div>
        </div>
    </div>
    <!-- Read -->
    <div class="flex flex-col md:flex-row items-center">
        <div class="">
            <img src="photo/shop.jpg" alt="">
        </div>
        <div class="p-16 flex flex-col gap-3 items-start">
            <h4 class="text-3xl font-bold text-[#100E34]">Entry for everyone</h4>
            <p class="text-gray-500 md:w-8/12">We Provide many of the best servises for you  and you will get the best benefits here </p>
            <button class="bg-[#100E34] text-white px-5  py-3 rounded-full">Read more ></button>
        </div>
    </div>
    <!-- customer review -->
    <div class="mb-14 flex flex-col gap-4 md:my-14">
        <h2 class="text-center text-[3em] font-semibold">Our Customer Feedback</h2>
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-9/12 m-auto gap-6 items-center text-gray-500">
            <div class="flex flex-col w-10/12 gap-3 p-6 m-auto shadow-lg shadow-gray-500">
                <div class="flex items-center gap-3">
                    <img src="photo/customer1.png" alt="">
                    <div class="">
                        <p class="text-black font-semibold">Ebrahim Islam</p>
                        <p>Bought How to be a programmer</p>
                    </div>
                </div>
                <p>The listing was hot (more than 170 bids). Everything worked well. We appreciated a simple process.Listing page, chat with a seller, the auction, escrow service – everything was great and we didn’t need anything on top.</p>
            </div>
            <div class="flex flex-col w-10/12 gap-3 p-6 m-auto shadow-lg shadow-gray-500 lg:translate-y-9">
                <div class="flex items-center gap-3">
                    <img src="photo/customer2.png" alt="">
                    <div class="">
                        <p class="text-black font-semibold">Alamin Talukder</p>
                        <p>Bought Thesis Paper Publish</p>
                    </div>
                </div>
                <p>The listing was hot (more than 170 bids). Everything worked well. We appreciated a simple process.Listing page, chat with a seller, the auction, escrow service – everything was great and we didn’t need anything on top.</p>
            </div>
            <div class="flex flex-col w-10/12 gap-3 p-6 m-auto shadow-lg shadow-gray-500">
                <div class="flex items-center gap-3">
                    <img src="photo/customer3.png" alt="">
                    <div class="">
                        <p class="text-black font-semibold">Eve Artie</p>
                        <p>Bought Tami Jum</p>
                    </div>
                </div>
                <p>The listing was hot (more than 170 bids). Everything worked well. We appreciated a simple process.Listing page, chat with a seller, the auction, escrow service – everything was great and we didn’t need anything on top.</p>
            </div>
        </div>
    </div>
    <!-- blog -->
     <div class="bg-[#EAEBF0] flex flex-col items-center gap-4 md:mt-24 md:pb-16 pb-4">
        <h3 class="text-[3em] font-semibold">Blog</h3>
        <div class="flex flex-col items-center md:flex-row md:justify-between md:w-9/12 m-auto gap-4">
            <div class="flex flex-col items-center w-9/12 m-auto md:translate-y-9">
                <img src="photo/book-1.jpg" alt="">
                <p class="bg-white p-6 rounded-3xl -mt-10">A modern guide for men aiming to improve their dating lives</p>
            </div>
            <div class="flex flex-col items-center w-9/12 m-auto">
                <img src="photo/book-2.jpg" alt="">
                <p class="bg-white p-6 rounded-3xl -mt-10">A practical guide to understanding how to sell more effectively </p>
            </div>
            <div class="flex flex-col items-center w-9/12 m-auto md:translate-y-9">
                <img src="photo/book-1.jpg" alt="">
                <p class="bg-white p-6 rounded-3xl -mt-10">A modern guide for men aiming to improve their dating lives</p>
            </div>
        </div>
     </div>
    <!-- footer -->
    <div class="flex flex-col md:flex-row md:justify-between md:w-9/12 m-auto items-center">
        <div class="flex flex-col items-center md:items-start gap-4  md:mt-14 mt-7">
            <h4 class="font-semibold">Subscribe To The Newsletter</h4>
            <div class="flex scale-x-125 border-4 py-2 px-4 rounded-full">
                <input type="email" placeholder="Enter Your Name">
                <p class="bg-red-700 text-white rounded-full px-3 py-2">></p>
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