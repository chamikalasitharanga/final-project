<?php
include_once('../goid-html/functions/userfunctions.php');


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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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

            <a href="category.php?category=<?= $items['cname']; ?>">

              <button type="button" class="menu-btn"><?= $items['cname']; ?></button>

            </a>

        <?php

          }
          
        }

        ?>
      </div>
    </div>
  </section>
  <?php
    if(isset($_GET['category'])){
      include 'food.php';
    }
  ?>
  <script src="script.js"></script>
</body>

</html>