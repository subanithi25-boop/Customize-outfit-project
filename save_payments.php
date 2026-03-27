<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $payment_id = $_POST['payment_id'];

    $stmt = $conn->prepare(
        "INSERT INTO payments (name, email, amount, payment_id) VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param("ssis", $name, $email, $amount, $payment_id);

    if ($stmt->execute()) {
        echo "Payment saved successfully";
    } else {
        echo "Error saving payment";
    }

    $stmt->close();
    $conn->close();
}
?>
