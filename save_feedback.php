<?php
 include "connect.php";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $rating = $_POST['rating'];
 $message = $_POST['message'];

 $sql = "INSERT INTO feedback(name,email,rating,message)
 VALUES('$name','$email','$rating','$message')";

 if(mysqli_query($conn,$sql)){
    echo "Feedback Submitted Successfully";
 } else {
     echo "Error: " . mysqli_error($conn);
      }

?>

