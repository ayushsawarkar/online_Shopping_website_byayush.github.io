<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }else{
        $user_id=$_SESSION['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        header('location:index.php');
        
    }
?>
