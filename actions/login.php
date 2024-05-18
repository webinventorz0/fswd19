<?php
    // email ..
    $email = $_GET['email'];
    $password = $_GET['password'];
    include('cn.php');
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('cant run matching query');
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['name'] = $row['name'];
        header('Location:../home.php');
    } else {
        $error = "Email or password did not match";
        header('Location:../index.php?error='.$error);
    }
?>