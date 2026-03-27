<?php
$conn = mysqli_connect("localhost", "root", "", "fashion_demo");

if (!$conn) {
    die("DB Connection Failed: " . mysqli_connect_error());
}

/* ================= COLLECT FORM DATA ================= */

$name     = $_POST['name'] ?? '';
$email    = $_POST['email'] ?? '';
$height   = $_POST['height'] ?? '';
$weight   = $_POST['weight'] ?? '';
$bust     = $_POST['bust'] ?? '';
$waist    = $_POST['waist'] ?? '';
$hip      = $_POST['hip'] ?? '';
$shoulder = $_POST['shoulder'] ?? '';
$sleeve   = $_POST['sleeve'] ?? '';
$neck     = $_POST['neck'] ?? '';
$material = $_POST['material'] ?? '';

/* ================= IMAGE UPLOAD ================= */

// $ar_image = '';

// if (!empty($_FILES['image']['name'])) {
//     $ar_image = time() . "_" . $_FILES['image']['name'];
//     move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $ar_image);
// }

/* ================= INSERT QUERY ================= */

// $sql = "INSERT INTO measurements
// (name, email, height, weight, bust, waist, hip, shoulder, sleeve, neck, material, ar_image)
// VALUES
// ('$name', '$email', '$height', '$weight', '$bust', '$waist', '$hip',
//  '$shoulder', '$sleeve', '$neck', '$material', '$ar_image')";

$sql = "INSERT INTO measurements
(name, email, height, weight, bust, waist, hip, shoulder, sleeve, neck, material)
VALUES
('$name', '$email', '$height', '$weight', '$bust', '$waist', '$hip',
 '$shoulder', '$sleeve', '$neck', '$material')";

if (mysqli_query($conn, $sql)) {
    echo "<h2 style='color:green; text-align:center;'>Measurements Submitted Successfully ✔</h2>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
