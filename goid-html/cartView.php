<?php
?><div id="sidecart" class="sidecart">
    <div class="cart_content">
        
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
                                <span class="minus"  id="minus">-</span>
                                <strong class="num" id="num">1</strong>
                                <span class="plus"  id="plus">+</span>
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

    <script>
        const plus=document.querySelector(".plus"),
        minus=document.querySelector(".minus"),
        num=document.querySelector(".num");

        let a=1;

        plus.addEventListener("click", ()=>{
            a++;
            a=(a<10) ? "0" + a:a;
            num.innerText=a;
            console.log(a);

        });

        minus.addEventListener("click", ()=>{
            if(a>1){
                a--;
                a=(a<10) ? "0" + a:a;
                num.innerText=a;
                console.log(a);

            }
           
        });
    </script>

</div>
<script src="cart.js"></script>