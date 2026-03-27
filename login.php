<?php
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    echo "Login Successful!";
} else {
    echo "Invalid Email or Password";
}
?>
