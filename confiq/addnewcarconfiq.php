<?php

require_once('conection.php');
$_SERVER['REQUEST_METHOD']='POST';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $image= $_POST['image'];
    $name= $_POST['name'];
    $type = $_POST['category'];
    $price= $_POST['price'];
    $quantity= $_POST['quantity'];
      
    if($con){
        $query = "SELECT * FROM book WHERE name = '$name'";
        $result = mysqli_query($con ,$query); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==0){
            $sql="insert into book (image,name,category,price,quantity) values ('$image','$name','$type','$price','$quantity')";
            $result=mysqli_query($con,$sql);
        
            if($result){
                echo '<script>
                    alert("New car added successfully");
                    window.location.href = "/book/car.php";
                </script>';

            }
            else{
                echo '<script>
                    alert("An error accour");
                    window.location.href = "\CAR DEALER\car.php";
                </script>';
            }
        }
        else{
            echo '<script>
                alert("You already have this car.");
                window.location.href = "/CAR DEALER/car.php";
            </script>';

        }
    }
    else{
        die(mysqli_error($con));
    }
}
?>