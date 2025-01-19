<?php
require_once('conection.php');
echo 'ho';

if (isset($_GET['name'])) {
    // Sanitize the input
    $model = mysqli_real_escape_string($con, $_GET['name']);

    // Prepare the DELETE statement
    $query = "DELETE FROM book WHERE name = ?";
    $stmt = mysqli_prepare($con, $query);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $model);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo ' lol';
        echo '<script>
                alert("Delete successful");
                window.location.href = "/book/car.php";
              </script>';
    } else {
        echo ' na';
        echo '<script>
                alert("Failed to delete");
                window.location.href = "/book/car.php";
              </script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>