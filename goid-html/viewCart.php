<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/26f63327dd.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="7">
                                    <h4 class="text-center text-info m-0">Products in your cart</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>Index No</th>                               
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>
                                    <form action="clearCart.php" method="post">
                                        <button type="submit" class="badge bg-danger p-1" name="delete" style="border: none; background: none;">
                                            <i class="fa-solid fa-trash">&nbsp;&nbsp;Clear All</i>
                                        </button>
                                    </form>


                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            session_start();
                            $ptotal = 0;
                            $total = 0;
                            if (isset($_SESSION['myCart'])) {
                                
                                foreach ($_SESSION['myCart'] as $key => $value) {
                                
                                    $ptotal = $value['price'] * $value['itemqty'];
                                    $total += $ptotal;
                                    // $itemKey = $key+1;
                                    echo "

                                            <form action ='cart.php' method = 'post'>
                                            <tr>
                                                <td>$key</td>
                                                <td><input type='hidden' name='fname' value='$value[fname]'>$value[fname]</td>
                                                <td><input type='hidden' name='price' value='$value[price]'>$value[price]</td>
                                                <td><input type='hidden' name='itemqty' value='$value[itemqty]'>$value[itemqty]</td>
                                                <td>$ptotal</td>
                                                <td>
                                                    <button type='submit' class='text-danger' name='remove' style='border: none; background: none;'>
                                                    <i class='fa-regular fa-trash-alt'></i>
                                                    </button>
                                                </td>
                                            </tr>";
                                            
                                           
                                }

                                
                                
                            }
                            ?>

                            <tr>
                                    <td colspan='3'>
                                        <a href='category.php' class = 'btn btn-success'><i class="fa-sharp fa-solid fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping
                                        </a>
                                    </td>
                                    <td><b>Grand Total</b></td>
                                    <td><?php echo "$total"; ?></td>
                                    <td>
                                        
                                        
                                        <?php 
                                            if($total>1){
                                               echo "<a href='checkout.php' class='btn btn-primary'><i class='fa-solid fa-credit-card'></i>&nbsp;&nbsp;Checkout</a>";
                                            }else{
                                                echo "<button class='btn btn-primary' disabled><i class='fa-solid fa-credit-card'></i>&nbsp;&nbsp;Checkout</button>";
                                            }
                                        ?>
                                    </td>
                                    
                            </tr>
                            </form>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>



</body>

</html>