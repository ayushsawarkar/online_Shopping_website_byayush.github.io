<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content=type" content="text/html ; charset=UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
        <title>E-Commerce Product Grid</title>
       
       <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="css/fontawseome.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"crossorigin="anonymous">
      <style>
                       
body
{
    background-color: white;
    width: 100%;
    height: 100vh;
    display: grid;
    align-items: center;
    
}

.product-in
{
    width: 100%;
    height: auto;
    padding: 15px;
    position: relative;
    overflow: hidden;
    box-shadow: 0px 15px 5px -2px #666;
    transition: 0.5s;
}
.product-image
{
    width: 100%;
    height: 220px;
    position: relative;
}
.product-image ::before
{
    width: 100%;
    height: 100%;
    position: relative;
    content: '';
    top: 0;
    left: 0;
    background: rgb(0,0,0,0.5);
    opacity:0 ;
}
.product-image h1
{
    width: 50px;
    height: 50px;
    position: absolute;
    right: 10px;
    top:10px;
    font-family: 'Poppins',sans-serif;
    color: #fff;
    background: #f50057;
    text-transform: uppercase;
    font-size: 16px;
    line-height: 50px;
    text-align: center;
    border-radius: 50%;
}
.product-image img
{
    width: 100%;
    height: 100%;
}
.product-content
{
    height: auto ;
    width: 100%;
    padding: 20px 10px;
    background: #fff;
}
.product-content a
{
    
   font-size: 16px;
   color: #000;
   font-family: 'Poppins',sans-serif;
   text-decoration-line:none;  
}
.product-content p
{
   font-size: 14px;
   color: #000;
   font-family: 'Poppins',sans-serif;
   text-decoration-line:none;  
   margin-top: 10px;
   margin-bottom: 0;
   font-weight: 600;
}
.product-content del
{
    margin-left: 5px;
    font-size: 16px;
    color: #666;

}
.product-content span
{
    float: right;
}
.product-content i
{
    color: #f50057;
    font-size: 25px;
}
        </style>
       </head>
        <body>
            <?php
            include 'header.php'
            ?>
            <div class="container"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                            <div class="product-image">
                                <h1>New</h1>
                                <a href="men1.php">
                                <img src="img/men1/71NiKMvH2IL._UY550_.jpg" alt=""/></a>
                                
                            </div>
                            <div class="product-content">
                                <a href="women1.php">Nike Men's T-shirt</a>
                                <p><h4>
                                    &#8377; 748 <del>1283</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                            <div class="product-image">
                               
                            <a href="men2.php">
                                <img src="img/men2/61DOyZAYHeL._UY550_.jpg" alt=""/>
                            </a>  
                            </div>
                            <div class="product-content">
                                <a href="men2.php">Dennis Lingo Men shirt</a>
                                <p><h4>
                                    &#8377; 699 <del>1100</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                           <a href="men3.php"> <div class="product-image">
                                
                            
                                <img src="img/men3/7103fQ4xTeL._UX569_.jpg" alt=""/>
                                
                            </div></a>
                            <div class="product-content">
                                <a href="men3.php">Levi's Men's Shirt</a>
                                <p><h4>
                                    &#8377; 1081 <del>1500</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                            <div class="product-image">
                                <h1>Trending</h1>
                            <a href="men4.php">
                                <img src="img/men4/81KpWMZ1LyL._UX569_.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-content">
                                <a href="men4.php">Symbol Men's Stretch Jeans</a>
                                <p><h4>
                                    &#8377; 539 <del>620</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                            <div class="product-image">
                                <h1>New</h1>
                                <a href="men5.php">
                                  <img src="img/men5/811EeglgQCL._UY550_.jpg" alt=""/></a>
                            </div>
                            <div class="product-content">
                                <a href="men5.php">US Polo T-Shirt</a>
                                <p><h4>
                                    &#8377; 934 <del>1699</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                            <div class="product-image">
                                <h1>New</h1>
                            <a href="men6.php">
                                <img src="img/men6/81DeOp7W11L._UY550_.jpg" alt=""/>
                                
                            </div>
                            </a>
                            <div class="product-content">
                                <a href="men6.php">Men's Casual Skinny Jeans</a>
                                <p><h4>
                                    &#8377; 1187 <del>1200</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                            <a href="men7.php"><div class="product-image">
                                <h1>New</h1>
                            
                                <img src="img/men7/tshirt1.JPG" alt=""/>
                                
                            </div>
                            </a>
                            <div class="product-content">
                                <a href="men7.php">Urbano Fashion</a>
                                <p><h4>
                                    &#8377; 450<del>799</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include 'footer.php'
            ?>
        </body>
</html>