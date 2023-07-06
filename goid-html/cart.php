<?php
    include_once('../goid-html/functions/userfunctions.php');
    session_start();

    if(isset($_GET['action'])=="add"){
       $id = $_GET['id'];
       $name = $_GET['fname'];
       $price = $_GET['price'];
       $_SESSION['my_cart'][$id] = array(
            'fid'=>$id,
            'fname'=>$name,
            'fprice'=>$price
       );
       print_r($_SESSION['my_cart']);
    }

    
?>
    <!-- side cart -->
    <div id="sidecart" class="sidecart">
        <div class="cart_content">
            <!-- cart header -->
            <div class="cart_header">
                <img src="images/cart.png" alt="" style="width: 40px;">
                <div class="header_title">
                    <h2>Your cart</h2>
                    <span id="items_num">4</span>
                </div>
                <span id="close_btn" class="close_btn">&times;</span>
            </div>
            <!-- cart items -->
            <div class="cart_items">
                <!-- item1 -->
                <div class="cart_item">
                    <div class="remove_item">
                        <span>&times;</span>
                    </div>
                    <div class="item_img">
                        <img src="images/kottuimg.jpg" alt="">
                    </div>
                    <div class="item_details">
                        <p>Chicken Kottu</p>
                        <Strong>Rs.950</Strong>
                        <div class="qty">
                            <span onclick="decrementQuantity('item1')">-</span>
                            <strong id="quantity_item1">1</strong>
                            <span onclick="incrementQuantity('item1')">+</span>
                        </div>
                    </div>
                </div>

                <!-- item2 -->
                <div class="cart_item">
                    <div class="remove_item">
                        <span>&times;</span>
                    </div>
                    <div class="item_img">
                        <img src="images/pexels-bishop-tamrakar-3926133.jpg" alt="">
                    </div>
                    <div class="item_details">
                        <p>Chicken Rice</p>
                        <Strong>Rs.950</Strong>
                        <div class="qty">
                            <span onclick="decrementQuantity('item2')">-</span>
                            <strong id="quantity_item2">1</strong>
                            <span onclick="incrementQuantity('item2')">+</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart actions -->
            <div class="cart_actions">
                <div class="subtotal">
                    <p>SUBTOTAL:</p>
                    <p>Rs.<span id="subtotal_price">1000</span></p>
                </div>
                <button>View Cart</button>
                <button>Checkout</button>
            </div>
        </div>
    </div>
    <script src="cart.js"></script>
