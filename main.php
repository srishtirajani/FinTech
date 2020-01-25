<?php
    include_once 'include/include.php';
$userPhone= $_POST['userPhone'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (userPhone, message) VALUES ('$userPhone', '$message');";
mysqli_query($conn, $sql);
header("Location: chat.php?message=success");
?>