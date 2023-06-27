<?php
include('../goid-html/functions/userfunctions.php');

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Food Menu</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="categorycss.css">
  <!-- fontawesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>

  <section class="menu">
    <div class="menu-container">
      <div class="menu-head">
        <h2>Foods & Drinks Menu</h2>
        <p>Food is any substance consumed to provide nutritional support for an organism. A drink or beverage is a liquid intended for human consumption</p>
      </div>

      <div class="menu-btns">

        <?php

        $categories = getAllActive('categories');

        if (mysqli_num_rows($categories) > 0) {

          foreach ($categories as $items) {

        ?>

            <button type="button" class="menu-btn"><?= $items['cname']; ?></button>

        <?php

          }
        }

        ?>

       

      </div>


      <!--<button type="button" class="menu-btn active-btn" id="btnRice">Fride rice</button>
        <button type="button" class="menu-btn" id="btnKottu">Kottu</button>
        <button type="button" class="menu-btn" id="btnbakery">Bakery items</button>
        <button type="button" class="menu-btn" id="btnDrinks">Drinks</button>-->


      <!--

          <div class = "food-items">
         
          <div class = "food-item btnRice">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/chickenriceimg.jpg"  alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Chicken mix rice</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:600.00</h3>
                <ul class = "rating">
                    <li><i class = "fas fa-star"></i></li>
                    <li><i class = "fas fa-star"></i></li>
                    <li><i class = "fas fa-star"></i></li>
                    <li><i class = "fas fa-star-half-alt"></i></li>
                    <li><i class = "far fa-star"></i></li>
                 </ul>
              <p class = "category">Categories: <span>Fride Rice</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
           
          </div>
          
          <div class = "food-item btnRice">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/fishriceimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Fish mix rice</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:700.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Fride Rice</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnRice">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/thaipokriceimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Thai pork rice</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1000.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Fride Rice</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
         
          <div class = "food-item btnRice">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/thaichickenimg.jpg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Thai chicken rice</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:950.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Fride Rice</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnRice">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/kochchiriceimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Chicken kochchi mix rice with prawns</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1500.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Fride Rice</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
         
          <div class = "food-item btnRice">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/beefriceimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Beef mix rice with kochchi</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1200.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Fride Rice</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
         

          
          <div class = "food-item btnKottu">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/naimiriskottuimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Nai miris Chicken kottu</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1400.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Kottu</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnKottu">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/beefkottuimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Beef Kottu</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1600.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Kottu</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnKottu">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/porkkottuimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Pork Kottu</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1500.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Kottu</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
         
          <div class = "food-item btnKottu">
            <div class = "food-img">
              <img src = "/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/seafoodkottuimg.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">SeaFood Kottu</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1800.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Kottu</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          

          
          <div class = "food-item btnbakery">
            <div class = "food-img">
              <img src = "foods/noodles-with-egg-and-vegetables.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Bagels</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:400.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Bakery items</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnbakery">
            <div class = "food-img">
              <img src = "foods/pizza-with-a-lot-of-cheese.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Chocolate Doughnuts</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:250.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Bakery items</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnbakery">
            <div class = "food-img">
              <img src = "foods/summer-juicy-beef-burger.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Juicy beef burger</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:850.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Bakery items</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnbakery">
            <div class = "food-img">
              <img src = "foods/tacos-with-pulled-pork-fresh-vegetables-and-cream.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Coffee Cacke (1 piece)</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:200.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Bakery items</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnbakery">
            <div class = "food-img">
              <img src = "foods/tiny-pickles-on-top-of-burger.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Chocolate cake (1 piece)</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:150.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Bakery items</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          
          <div class = "food-item btnbakery">
            <div class = "food-img">
              <img src = "foods/tortilla-chips-with-salsa.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Chicken Sandwich</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:300.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Bakery items</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>
          

          <div class = "food-item btnDrinks">
            <div class = "food-img">
              <img src = "foods/tortilla-chips-with-salsa.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Hot chocolate</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:600.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Beaverages</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>

          <div class = "food-item btnDrinks">
            <div class = "food-img">
              <img src = "foods/tortilla-chips-with-salsa.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Mango juce</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:300.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Beaverages</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>

          <div class = "food-item btnDrinks">
            <div class = "food-img">
              <img src = "foods/tortilla-chips-with-salsa.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Lime mojito with vodka</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:1300.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Beaverages</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>

          <div class = "food-item btnDrinks">
            <div class = "food-img">
              <img src = "foods/tortilla-chips-with-salsa.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Lime juce</h2>
              <div class = "line"></div>
              <h3 class = "food-price">Rs:300.00</h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Beaverages</span></p>
              <button type="submit" class="btnaddcart" id="cartbtn" >Add to cart</button>
            </div>
          </div>

        </div>
      </div>
    </section> 




        -->


      <script src="script.js"></script>
</body>

</html>