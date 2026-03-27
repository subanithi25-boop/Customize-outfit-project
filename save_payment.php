<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $payment_id = $_POST['payment_id'];

    // Save payment info to a text file (demo)
    $file = "payments.txt";
    $line = "$name | $email | ₹$amount | Razorpay ID: $payment_id\n";
    file_put_contents($file, $line, FILE_APPEND);

    echo "Payment recorded successfully!";
} else {
    echo "Invalid request";
}
?>
