<?php
// Database credentials
$host = "localhost";
$user = "root";       // usually 'root' on XAMPP
$pass = "";           // usually empty on XAMPP
$db   = "fashion_demo";

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$order_id = $_POST['order_id'];
$customer_name = $_POST['customer_name'];
$issue_type = $_POST['issue_type'];
$issue_description = $_POST['issue_description'];

// Handle file upload
$outfit_image = "";
if(isset($_FILES['outfit_image']) && $_FILES['outfit_image']['error'] == 0){
    $target_dir = "uploads/";
    if(!is_dir($target_dir)) mkdir($target_dir); // create folder if not exists
    $outfit_image = $target_dir . basename($_FILES["outfit_image"]["name"]);
    move_uploaded_file($_FILES["outfit_image"]["tmp_name"], $outfit_image);
}

// Insert into database
$sql = "INSERT INTO return_requests (order_id, customer_name, issue_type, issue_description, outfit_image)
        VALUES ('$order_id', '$customer_name', '$issue_type', '$issue_description', '$outfit_image')";

if($conn->query($sql) === TRUE){
    echo "<h2 style='text-align:center; color:#d81b60;'>Request submitted successfully!</h2>";
    echo "<p style='text-align:center;'><a href='return_form.html'>Go Back</a></p>";
}else{
    echo "Error: " . $conn->error;
}

$conn->close();
?>

