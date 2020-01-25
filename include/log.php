<?php
    include_once 'include.php';
    session_start();
    $phone = $_POST['phone'];
    $userPass = $_POST['userPass'];

    $sql = "SELECT userPhone, userPass FROM user WHERE userPhone = '$phone' AND userPass = '$userPass'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_fetch_assoc($result)) {
        $_SESSION['USER'] = $_POST['phone'];
        header("location:../psychometric.php");        
    } else {
        header("location:log.php?Invalid= Please Enter Correct Username and Password");
    }
?>
