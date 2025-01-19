<?php
require_once('conection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $customer_name = $_POST['name'];
    $customer_number = $_POST['number'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];
    $book_name = $_POST['bname'];
    $book_category = $_POST['bcategory'];
    $book_price = $_POST['bprice'];

    if ($con) {
        // Insert data into the 'sell' table
        $sql = "INSERT INTO sell (customer_name, customer_number, customer_email, customer_address, book_name, book_category, book_price) 
                VALUES ('$customer_name', '$customer_number', '$customer_email', '$customer_address', '$book_name', '$book_category', '$book_price')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // Retrieve all records from the 'car' table
            $sql1 = "SELECT * FROM book";
            $result1 = $con->query($sql1);
            $row = $result1->fetch_assoc();

            // Update the car quantity
            $sql2 = "UPDATE book SET quantity = (quantity - 1) WHERE name = '$book_name'";
            $update_result = $con->query($sql2);

            echo '<script>
                alert("New account created successfully");
                window.location.href = "/book/index.php";
            </script>';
        } else {
            echo '<script>
                alert("An error occurred");
                window.location.href = "/book/shop.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Database connection error");
            window.location.href = "/book/login.php";
        </script>';
    }
} else {
    die(mysqli_error($con));
}
?>
