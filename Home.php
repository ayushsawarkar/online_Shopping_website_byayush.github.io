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

<html>
    <head>
        <meta name="viewport" content="width-=device-width,initial-scale=1.0">
        <title>Home Page</title>
       <style>
           *
           {
    margin: 0;
    padding: 0;
    font-family: 'Roboto',sans-serif;
}

.container
{
    width: 100%;
    height: 99vh;
    background-image: linear-gradient(rgba(216, 202, 202, 0.7),rgba(0,0,0,0.7)),url(img/nordwood-themes-Nv4QHkTVEaI-unsplash.jpg);
    background-position: center;
    background-size: cover;
    box-sizing: border-box;
}
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
ul{
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
            ul li a
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
            ul:hover li a
            {
                transform: scale(1.5);
                opacity: 0.5;
                filter: blur(5px);
            }
            ul li a:hover
            {
              transform: scale(2);
                opacity: 1;
                filter: blur(0);   
            }
            ul li a::before
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
                z-index: -1;
            }
            ul li a:hover::before
            {
                transition:transform 0.1s;
                transform-origin: left;
                transform: scaleX(1);
            }
.row
{
    display: flex;
    height: 88%;
    align-items: center;
    margin-left: 80px;

}
.col
{
    flex-basis: 50%;
}
.col a
{
    text-decoration:none;
}

h2
{
    color: black;
    font-size: 40px;

}
p{
    color: black;
    font-size: 11px;
    line-height: 15px;

}
button
{
    width: 180px;
    color: #000;
    font-size: 16px;
    padding: 12px 0;
    background: 0;
    background-color: #fff;
    border: 0ch;
    border-radius: 30px;
    outline: none;
    margin-top: 30px;
}
button:hover
{
    color: white;
        background-color: #000;
}
.card
{
    background-color: black ;
    width: 226px;
    height: 243px;
    display: inline-block;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    cursor: pointer;
    margin: 10px 10px;
    background-position: center;
    background-size: cover;
    transition: transform 0.3s;
}
.card-1
{
    background-image: url(img/dom-hill-nimElTcTNyY-unsplash.jpg);
}
.card-2
{
    background-image: url(img/pexels-the-lazy-artist-gallery-1300550.jpg);
}
.card-3
{
    
    background-image: url(img/revolt-164_6wVEHfI-unsplash.jpg);
}
.card-4
{
    background-image: url(img/mohammad-metri-E-0ON3VGrBc-unsplash.jpg);
}
.card:hover
{
    transform: translateY(-15px);
    opacity: 1;
    filter: blur(0);
}
.log
{
    flex: right ;
    display: flex;  
}
       </style>

    </head>
    <body>
        <div class="container">
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
                        <li><a href="contactus.html">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="insert.php">Service</a></li>
                        <li><a href="cart.php">Cart</a></li>
                    
                                                </ul>
                </nav>
                
            </div>
            <div class="row">
                <div class="col">
                    <h2>Shopping</h2>
                    <p>
                    </p>
                    <button type="button">
                        Explore
                    </button>
                </div>
                <div class="col">
                   <a href="topgrid.php"> <div class="card card-1" title="Women's Wear">
                        <h5>
                            Women's Wears
                        </h5>

                    </div></a>
                   <a href="mengrid.php"> <div class="card card-2" title="Men's Wear">
                        <h5>
                            Men's Wears
                        </h5>
                        
                    </div></a>
                    <a href="mensfootwear.php"> <div class="card card-3"title="Men's Footwear">
                        <h5>
                            Shoes for Mens
                        </h5>
                        
                    </div></a>
                    <a href="womenfootwear.php"><div class="card card-4" title="Women's Footwear">
                        <h5>
                            Shoes For Women
                        </h5>
                        
                    </div></a>
                </div>
            </div>
        </div>
        
            
    
    </body>
</html>