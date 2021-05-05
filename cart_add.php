<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    echo"$user_id";
    $item_id=$_GET['id'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
    echo"Item added to cart";
    if($item_id==1)
    {
        header('location: women1.php');
    }
    if($item_id==2)
    {
        header('location: women2.php');
    }
    if($item_id==13)
    {
        header('location: women3.php');
    }
    if($item_id==14)
    {
        header('location: women4.php');
    }
    if($item_id==15)
    {
        header('location: women5.php');
    }
    
    if($item_id==17)
    {
        header('location: men1.php');
    }
    if($item_id==18)
    {
        header('location: men2.php');
    }
    if($item_id==19)
    {
        header('location: men3.php');
    }
    if($item_id==20)
    {
        header('location: men4.php');
    }
    if($item_id==21)
    {
        header('location: men5.php');
    }
    if($item_id==22)
    {
        header('location: men6.php');
    }
    if($item_id==23)
    {
        header('location: men7.php');
    }
    if($item_id==24)
    {
        header('location: mfoot1.php');
    }
    if($item_id==25)
    {
        header('location: mfoot2.php');
    }
    if($item_id==26)
    {
        header('location: mfoot3.php');
    }
    if($item_id==27)
    {
        header('location: mfoot4.php');
    }
    if($item_id==28)
    {
        header('location: mfoot5.php');
    }
    if($item_id==29)
    {
        header('location: wfoot.php');
    }
    if($item_id==30)
    {
        header('location: wfoot1.php');
    }
    if($item_id==31)
    {
        header('location: wfoot2.php');
    }

    if($item_id==32)
    {
        header('location: wfoot3.php');
    }
?>