<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
    
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .navbar 
{
    height: 7%;
    display: flex;
    align-items: center;
}
.logo
{
    width: 50px;
    cursor: pointer;
    margin-left: 25px;
}
.menu-icon
{
    width: 25px;
    cursor: pointer;
    margin-left: 25px;
    margin-right: 25px;
}
nav
{
    margin-left: 10px;
    flex: 1;
    text-align: right;
}
nav ul{
                margin: 0;
                padding: 0;
                display: flex;
            }
nav ul li
{
                list-style: none;
                margin: 0 20px;
                transition: 0.5s;
            }
            nav ul li a
            {
                display: block;
                position: relative;
                text-decoration: none;
                padding: 5px;
                font-size: 20px;
                font-family: sans-serif;
                text-transform: uppercase;
                color: #000;
                transition: 0.5s;

            }
            nav ul:hover li a
            {
                transform: scale(1.5);
                opacity: 0.5;
                text-decoration: none;
                filter: blur(5px);
            }
            nav ul li a:hover
            {
              transform: scale(2);
                opacity: 1;
                filter: blur(0); 
                text-decoration: none;  
            }
            nav ul li a::before
            {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgb(93, 236, 236);
                transition: 0.5s;
                transform-origin: right;
                transform: scaleX(0);
                text-decoration:none;
                z-index: -1;
            }
            ul li a:hover::before
            {
                transition:transform 0.1s;
                transform-origin: left;
                text-decoration:none;
                transform: scaleX(1);
            }
        </style>
    </head>
    <body>
        <header>
        <div class="navbar">
                
            <nav>
                <ul>
                    
                <li><a href="login.php"><?php
                            if(!isset($_SESSION['username']))
                            {
                                echo "Login";
                            }
                            else
                            {
                                echo "welcome..".$_SESSION['username'];
                            }
                            
                            ?></a></li>
                            <li><p> 
                            <?php 
                            if(!isset($_SESSION['username']))
                            {
                                echo "<a href='register.php'>Sign UP</a>" ;
                            }
                            else
                            {
                                echo "<a href='logout.php'>Logout</a>" ;
                            }
                            ?></a> </p>
                             <?php  ?>
                            <li>
                        
                          
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="header.php">Contact</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="cart.php">Cart</a></li>
                
                </ul> 
                  
            </nav>
            
        </div>
        </header>
    </body>
</html>