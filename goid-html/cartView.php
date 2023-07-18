<?php
?><div id="sidecart" class="sidecart">
    <div class="cart_content">
        <!-- cart header -->
        <div class="cart_header">
            <img src="" alt="" style="width: 40px;">
            <div class="header_title">
                <h2>Your cart</h2>
                <span id="items_num">4</span>
            </div>
            <span id="close_btn" class="close_btn">&times;</span>
        </div>
        <?php
        if (isset($_SESSION['myCart'])) {

            foreach ($_SESSION['myCart'] as $value) {
        ?>
            
                <!-- cart items -->
                
                    <div class="cart_item">
                        <div class="remove_item">
                            <span name="remove">&times;</span>
                        </div>
                        <div class="item_img">
                            <img src="" alt="">
                        </div>
                        <div class="item_details">
                            <p><?php echo $value['fname'] ?></p>
                            <Strong><?php echo $value['price'] ?></Strong>
                            <div class="qty">
                                <span onclick="decrementQuantity()" id="decrement">-</span>
                                <strong id="quantity_item1">1</strong>
                                <span onclick="incrementQuantity()" id="increment">+</span>
                            </div>
                        </div>
                    </div>
               


        <?php
            }
        }

        ?>
    </div>
    <div class="cart_actions">
        <div class="subtotal">
            <p>SUBTOTAL:</p>
            <P>$<span id="subtotal_price"></span></P>
        </div>
        <button>View Cart</button>
        <button>Checkout</button>
    </div>

</div>
<script src="cart.js"></script>