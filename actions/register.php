<?php 
 // variables for get form data ..
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $cpassword = $_POST['confrimpassword'];
 // connection ..
 include('cn.php');
 if($password == $cpassword){
    $qur = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($cn,$qur) or die('cant run query');
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        $error = "Email is already exist";
        header('Location:../register.php?email='.$error);
    } else {
      // query ..
      $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
        // run query ..
      mysqli_query($cn,$query) or die('cant run query for insert users data');
        // redirect ..
      header('Location:../register.php');
    }
 } else {
    $error = "Password Did not match";
    header('Location:../register.php?password='.$error);
 }
 
?>