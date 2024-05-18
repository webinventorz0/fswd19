<?php 
    $id = $_GET['id'];
    include('cn.php');
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($cn,$query) or die('cant run query for delete');
    header("Location:../home.php?msg='User Deleted Successfully'");
?>