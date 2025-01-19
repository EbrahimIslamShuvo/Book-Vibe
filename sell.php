<?php
    require_once("confiq\conection.php");
$sql = "SELECT * FROM sell";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Admin || CAR DEALERSHIP</title>
</head>
<body>
    <!-- nav -->
    <div class="flex flex-col items-center text-gray-500">
        <img class="md:hidden" src="photo/logo.jpg" alt="">
        <div class="flex md:justify-between justify-center items-center w-9/12 m-auto gap-4">
            <div class="flex gap-4">
                <a href="index.php" class="hover:scale-110 hover:font-semibold hover:text-black">Home</a>
                <a href="shop.php" class="hover:scale-110 hover:font-semibold hover:text-black">Shop</a>
            </div>
            <img class="hidden md:block" src="photo/logo.jpg" alt="">
            <div class="flex gap-4">
                <a class="hover:scale-110 hover:font-semibold hover:text-black">Contact</a>
                <a class="hover:scale-110 hover:font-semibold hover:text-black">About Us</a>
                <a href="Customer.php" class="font-semibold text-black">Profile</a>
            </div>
        </div>
    </div>
    <!-- dashboard -->
     <div class="flex w-full pb-5 md:w-6/12 m-auto">
        <p class="text-center w-[50%] border-b-2 border-red-500 py-3 m-auto">Dashboard</p>
     </div>

    
    <div class="order-history-section md:w-10/12 m-auto">
        <div class="flex w-6/12 pb-5 m-auto">
            <a href="admin.php" class="text-center w-[50%] border-b-2 border-gray-100 py-3 m-auto">User List</a>
            <a href="car.php" class="text-center w-[50%] border-b-2 border-gray-100 py-3 m-auto">Book List</a>
            <a href="sell.php" class="text-center w-[50%] border-b-2 border-red-500 py-3 m-auto">Sell History</a>
        </div>
        <table class="table-auto w-full border-collapse border border-gray-300 m-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Customer Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Customer Number</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Customer Email</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Customer Address</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Book Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Book Category</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Book Price</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr">
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['customer_name']?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['customer_number']?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['customer_email']?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['customer_address']?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['book_name']?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['book_category']?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['book_price']?></td>
                    </tr>
                    <?php
                    }
                ?>
                
            </tbody>
        </table>
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