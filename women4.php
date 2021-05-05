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
              <img src = "img/women 4/51-Og6WPZPL._UY550_.jpg" alt = "shoe image">
              <img src = "img/women 4/61AdGqXW4DL._UX679_.jpg" alt = "shoe image">
              <img src = "img/women 4/61B3B8SQIML._UX569_.jpg" alt = "shoe image">
              <img src = "img/women 4/61vOIp-qLgL._UX569_.jpg" alt = "shoe image">
              
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "img/women 4/51-Og6WPZPL._UY550_.jpg"alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "img/women 4/61AdGqXW4DL._UX679_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "img/women 4/61B3B8SQIML._UX569_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "img/women 4/61vOIp-qLgL._UX569_.jpg" alt = "shoe image">
              </a>
            </div>
           
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Women Slim Fit 3 Button Stretchable Ankle Length Jeans</h2>
          <a href = "#" class = "product-link">Jeans</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>&#8377;650</span></p>
            <p class = "new-price">New Price: <span>&#8377;499</span></p>
            <input type="hidden" name="price" value="499">
            <input type="hidden" name="color" value="Black">
            <input type="hidden" name="category" value="Jeans">
            <input type="hidden" name="name" value="Women Slim Jeans">
          </div>

          <div class = "product-detail">
            
            <ul>
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Material: <span> 70% Cotton & 30% Polyester</span></li>
              <li>Category: <span>Jeans</span></li>
              <li>Shipping Area: <span>All over India</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <a href="cart_add.php?id=14"><button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button></a>
            <button type = "submit" class = "btn">Buy now</button>
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
</form<>
    <script src="javascript/script.js"></script>
    <?php
    include 'footer.php'
    ?>
  </body>
</html1