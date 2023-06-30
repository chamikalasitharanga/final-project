<?php
include_once('../goid-html/functions/userfunctions.php');

if (isset($_GET['category'])) {
    $category_slog = $_GET['category'];

    $category_data = getSlugActive('categories', $category_slog);
    $category = mysqli_fetch_array($category_data);
    $id = $category['cid'];
} else {
    // Handle when category parameter is missing or not set
    // For example, redirect to an error page or display an error message
    echo "Category not specified";
    exit;
}


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

    <div class="food-items">

        <?php

        $foods = getFoodByCategory($id);
        // print_r($foods);
        if (mysqli_num_rows($foods) > 0) {

            foreach ($foods as $items) {

        ?>

                <div class="food-item btnRice">
                    <div class="food-img">
                        <img src="/Users/chamikasmacbook/Desktop/untitled folder/goid-html/category/chickenriceimg.jpg" alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name"><?= $items['fname'] ?></h2>
                        <div class="line"></div>
                        <h3 class="food-price"><?= $items['price'] ?></h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Category: <span><?= $category_slog ?></span></p>
                        <button type="submit" class="btnaddcart" id="cartbtn">Add to cart</button>
                    </div>
                </div>
                
        <?php
            }
        } else {

            echo "No data";
        }
        ?>

    </div>

</body>



</html>