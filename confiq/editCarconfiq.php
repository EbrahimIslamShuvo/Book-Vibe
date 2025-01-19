<?php

require_once('conection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $image= $_POST['image'];
    $name= $_POST['name'];
    $category = $_POST['category'];
    $price= $_POST['price'];
    $quantity=$_POST['quantity'];
      
    if($con){
        $sql="UPDATE book SET image='$image', name='$name',category='$category',price='$price' ,quantity='$quantity' WHERE name='$name'";
        $result = mysqli_query($con, $sql);
        echo '<script>
        alert("Update successfully");
        window.location.href = "/book/car.php";
        </script>';
    }
    else{
        die(mysqli_error($con));
    }
}
?>