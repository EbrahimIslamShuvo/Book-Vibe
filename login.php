<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Login || CAR DEALERSHIP</title>
</head>
<body>
    <!-- nav -->
    <div class="flex flex-col items-center text-gray-500">
        <img class="md:hidden" src="photo/logo.jpg" alt="">
        <div class="flex md:justify-between justify-center items-center w-9/12 m-auto gap-4">
            <div class="flex gap-4">
                <a href="index.php" class="hover:scale-110 hover:font-semibold hover:text-black">Home</a>
                <a href="shop.php" class="hover:scale-110 hover:font-semibold hover:text-black">Shop</p>
            </div>
            <img class="hidden md:block" src="photo/logo.jpg" alt="">
            <div class="flex gap-4">
                <a class="hover:scale-110 hover:font-semibold hover:text-black">Contact</a>
                <a class="hover:scale-110 hover:font-semibold hover:text-black">About Us</a>
                <a href="login.php" class="font-semibold text-black">Profile</a>
            </div>
        </div>
    </div>
    <!-- login -->
    <div class="flex flex-col md:flex-row md:w-7/12 m-auto md:gap-24 items-center md:py-28 relative">
        <img class="hidden md:block absolute left-14 top-5" src="photo/Saly-1.png" alt="">
        <div class="text-center md:text-start pt-5">
            <h2 class="text-[2.4em] font-semibold">WELCOME TO OUR <span class="text-red-500">Book Vibe</span> COMMUNITY</h2>
            <p class="text-[1.1em] text-gray-500">Start a new journey with us and join our community</p>
            <button class="bg-red-500 text-white py-2 px-3 rounded-full shadow-gray-500 shadow-md my-10">Explore our community</button>
        </div>
        <!-- signin form -->
        <form action="confiq/login_con.php" method="POST">
        <div class="flex flex-col gap-6 items-center">
            <div class="flex flex-col items-center">
                <h2 class="text-[3em] font-bold">Sign In</h2>
            <p class="text-[.75em] text-gray-500 p-0">Welcome back to our community</p>
            </div>
            <input class="scale-110 shadow-sm px-10 py-2 rounded-full shadow-gray-500" type="email" name="email" required placeholder="Enter Your Email">
            <input class="scale-110 shadow-sm px-10 py-2 rounded-full shadow-gray-500" type="password" name="password" required placeholder="password">
            <button type="submit" class="scale-110 shadow-sm px-28 py-2 rounded-full shadow-gray-500 bg-red-500 text-white">Login</button>
            <p class="text-gray-500 text-sm -mt-3">
                I don't have an account. 
                <a class="text-red-500 font-semibold hover:underline" href="signup.php">Create an account</a>
            </p>
        </div>
        </form> 
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
                    <p>Find A book</p>
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
                <p>© 2023 Car Leadership</p>
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