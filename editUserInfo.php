<?php 
require_once('confiq/conection.php');

if(isset($_GET['email'])) {
    $u_email = $_GET['email'];

    // Fetch user data from the database
    $u_sql = "SELECT * FROM consumer WHERE email=?";
    $u_stmt = mysqli_prepare($con, $u_sql);
    mysqli_stmt_bind_param($u_stmt, "s", $u_email);
    mysqli_stmt_execute($u_stmt);
    $u_result = mysqli_stmt_get_result($u_stmt);
    $u_row = mysqli_fetch_array($u_result, MYSQLI_ASSOC);
} else {
    // Redirect user if 'mail' parameter is not provided
    header("Location: error.php");
    exit();
}
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
    <!-- main -->
     <div class="flex flex-col">
        <form action="confiq/updateuserconfig.php" method="POST" enctype="multipart/form-data" class="sign-in-form flex flex-col items-center justify-center gap-4">
            <h2>Edit user info</h2>
            <input class="scale-110 shadow-sm px-10 py-2 rounded-full shadow-gray-500" type="text" value="<?php echo $u_row['name']; ?>" name="name" required placeholder="Enter Edited Full Name">
            <input class="scale-110 shadow-sm px-10 py-2 rounded-full shadow-gray-500" type="text" value="<?php echo $u_row['phone']; ?>" name="number" required placeholder="Enter Edited Full number">
            <input class="scale-110 shadow-sm px-10 py-2 rounded-full shadow-gray-500" type="text" value="<?php echo $u_row['email']; ?>" name="email" required placeholder="Enter Edited Full email">
            <input class="scale-110 shadow-sm px-10 py-2 rounded-full shadow-gray-500" type="text" value="<?php echo $u_row['type']; ?>" name="type" required placeholder="Enter Edited Full type">
            <div class="flex gap-8">
                <button class="bg-blue-500 text-white px-8  py-3 rounded-xl" type="submit" href="">Edit</button>
                <button class="bg-[#100E34] text-white px-5  py-3 rounded-xl" href="">Cencel</button>
            </div>
        </form>
                
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