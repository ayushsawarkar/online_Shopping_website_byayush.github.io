<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    <?php
    include 'header.php'
    ?>
    <form method="POST" action="checkout.php">
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "img/men7/tshirt1.JPG" alt = "shoe image">
              <img src = "img/men7/tshirt2.JPG" alt = "shoe image">
              <img src = "img/men7/tshirt3.JPG" alt = "shoe image">
      
              
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "img/men7/tshirt1.JPG" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "img/men7/tshirt2.JPG" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "img/men7/tshirt3.JPG" alt = "shoe image">
              </a>
            </div>
           
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Urbano Fashion</h2>
          <a href = "#" class = "product-link">T-Shirts</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>&#8377;799</span></p>
            <p class = "new-price">New Price: <span>&#8377;450</span></p>
            <input type="hidden" name="price" value="450">
            <input type="hidden" name="color" value="Grey Yellow Black">
            <input type="hidden" name="category" value="Jeans">
            <input type="hidden" name="name" value="Urbano Tshirt">
          
          </div>

          <div class = "product-detail">
            <!--<h2>about this item: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
            -->
            <ul>
              <li>Color: <span>Grey Yellow Black</span></li>
              <li>Category: <span>T-Shirt</span></li>
              <li>Available: <span>In stock</span></li>
              <li>Material: <span>Cotton</span></li>
              <li>Shipping Area: <span>All over India</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <a href="cart_add.php?id=23"><button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button></a>
            <button type = "sumbit" class = "btn">Buy Now</button>
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
</form>
    <script src="javascript/script.js"></script>
    <?php
    include 'footer.php'
    ?>
  </body>
</html>