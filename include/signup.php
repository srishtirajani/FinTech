<?php
    include_once 'include.php';
    $userName = $_POST['userName'];    
    $userPassword = $_POST['userPassword'];
    $income = $_POST['income'];
    $userPhone = $_POST['phone'];
    $age = $_POST['age'];
    $area = $_POST['area'];
    
    $sql = "INSERT INTO user (userName, userPass, income, userPhone, age, area) VALUES ('$userName', '$userPassword', '$income', '$userPhone', '$age', '$area');";
    mysqli_query($conn, $sql);
    header("Location: ../login.php?signup=success");
?>  