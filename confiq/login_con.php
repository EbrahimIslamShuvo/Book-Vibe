<?php
    require_once ('conection.php');
    $_SERVER['REQUEST_METHOD'] = 'POST';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];


        if ($con) {
            $query = "SELECT * FROM consumer WHERE email = '$email' AND password =  '$password'";
            $result = mysqli_query($con, $query);

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                $type = $row['type'];

                if ($type == 'customer') {
                    header("Location: /book/Customer.php?email=" . urlencode($row['email']));
                }
                if ($type == 'admin') {
                    header("Location: /book/admin.php?email=" . urlencode($row['email']));
                }
            } else {
                echo '<script>
                    alert("Login failed. Username or password invalid");
                    window.location.href = "/book/login.php";
                </script>';

            }
        } else {
            die(mysqli_error($con));
        }
    }
?>