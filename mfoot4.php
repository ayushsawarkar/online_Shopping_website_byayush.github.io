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
              <img src = "shoes/men4/818td-p1lmL._UY500_.jpg" alt = "shoe image">
              <img src = "shoes/men4/81j+soc6y5L._UY500_.jpg" alt = "shoe image">
              <img src = "shoes/men4/81PcQwDKunL._UY535_.jpg" alt = "shoe image">
              <img src = "shoes/men4/81PD0nac6pL._UY500_.jpg" alt = "shoe image">
              
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "shoes/men4/818td-p1lmL._UY500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "shoes/men4/81j+soc6y5L._UY500_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "shoes/men4/81PcQwDKunL._UY535_.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "shoes/men4/81PD0nac6pL._UY500_.jpg" alt = "shoe image">
              </a>
            </div>
        
           
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Bourge Men's Loire-z63 Running Shoes</h2>
          <a href = "#" class = "product-link">Sports Shoes</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>&#8377;1199</span></p>
            <p class = "new-price">New Price: <span>&#8377;699</span></p>
            <input type="hidden" name="price" value="699">
            <input type="hidden" name="color" value="Grey">
            <input type="hidden" name="category" value="Sports Shoes">
            <input type="hidden" name="name" value="Bourge Mens Loire Running Shoes">
          </div>

          <div class = "product-detail">
            
            <ul>
              <li>Color: <span>Grey</span></li>
              <li>Category: <span>Sports Shoes</span></li>
              <li>Available: <span>In stock</span></li>
              <li>Material: <span>Mesh  </span></li>
              <li>Shipping Area: <span>All over India</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>
          
          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <a href="cart_add.php?id=27"><button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button></a>
            <button type = "submit" class = "btn">Buy Now</button>
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
</htm