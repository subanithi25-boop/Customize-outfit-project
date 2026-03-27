<?php
include "connect.php";

$sql = "INSERT INTO customize () VALUES ()";

if (mysqli_query($conn, $sql)) {
    echo "Customization Saved Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>


 