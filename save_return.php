<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "fashion_demo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $order_id = $_POST['order_id'] ?? '';
    $customer_name = $_POST['customer_name'] ?? '';
    $issue_type = $_POST['issue_type'] ?? '';
    $description = $_POST['description'] ?? '';

    // Handle file upload if exists
    $image_name = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $image_name = time() . "_" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image_name);
    }

    // Prepare SQL
    $stmt = $conn->prepare("INSERT INTO returns (order_id, customer_name, issue_type, description, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $order_id, $customer_name, $issue_type, $description, $image_name);

    if ($stmt->execute()) {
        echo "Return / Alteration request submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
