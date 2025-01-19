<?php

require_once('conection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name= $_POST['name'];
    $number= $_POST['number'];
    $email= $_POST['email'];
    $type= $_POST['type'];
      
    if($con){
        if($type == "customer" || $type == "admin"){
            $sql="UPDATE consumer SET name='$name',phone='$number',email='$email' ,type='$type' WHERE (email='$email' || phone='$number')";
            $result = mysqli_query($con, $sql);
            echo '<script>
            alert("Update successfully");
            window.location.href = "/book/admin.php";
            </script>';
        }

        else{
            echo '<script>
            alert("Wrong role given");
            window.location.href = "/book/admin.php";
            </script>';
        }
    }
    else{
        die(mysqli_error($con));
    }
}
?>