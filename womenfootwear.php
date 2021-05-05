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
                                <a href="wfoot.php">
                                <img src="shoeswomen/women1/314QHAqlFjL.jpg" alt=""/></a>
                                
                            </div>
                            <div class="product-content">
                                <a href="wfoot.php">Denill Women Flats</a>
                                <p><h4>
                                    &#8377; 335 <del>499</del>
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
                               
                            <a href="wfoot1.php">
                                <img src="shoeswomen/women2/41qg1pFfATL.jpg" alt=""/>
                            </a>  
                            </div>
                            <div class="product-content">
                                <a href="wfoot1.php">SILVER CAT Slipper</a>
                                <p><h4>
                                    &#8377; 399<del>600</del>
                                    <span>
                                      <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-in">
                           <a href="wfoot2.php"> <div class="product-image">
                              <img src="shoeswomen/women3/513tnjpRKPL._UY395_.jpg" alt=""/>
                        </div></a>
                            <div class="product-content">
                                <a href="wfoot2.php">Nike Women Running Shoes</a>
                                <p><h4>
                                    &#8377; 2661 <del>4990</del>
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
                            <a href="wfoot3.php">
                                <img src="shoeswomen/women4/611Q9FcHf-L._UY500_.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-content">
                                <a href="wfoot3.php">Women's Fashion Sandal</a>
                                <p><h4>
                                    &#8377; 314 <del>681</del>
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
                            <a href="wfoot3.html">
                                <img src="shoeswomen/women4/611Q9FcHf-L._UY500_.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-content">
                                <a href="wfoot3.html">Women's Fashion Sandal</a>
                                <p><h4>
                                    &#8377; 314 <del>681</del>
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