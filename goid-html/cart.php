<?php
session_start();

// session_destroy();
    
if (!isset($_SESSION['myCart'])) {
    $_SESSION['myCart'] = array();
}


if (isset($_POST['addCart'])) {
    
    
    
    $fname = $_POST['fname'];
    $price = $_POST['price'];
    $qty = $_POST['itemqty'];
    $check_product = array_column($_SESSION['myCart'],'fname');
    
    

    if (in_array($fname,$check_product)) {
        echo "
        
            <script>

                alert('Item already added to cart');

            </script>
        ";
    }else {

        

        $_SESSION['myCart'][] = array('fname' => $fname, 'price' => $price, 'itemqty' => $qty);
        
        header('location:viewCart.php');
    }
    
}
    
if (isset($_POST['remove'])) {
        // echo "remove me";
        
         foreach($_SESSION['myCart'] as $key => $value){
            
             if ($value['fname'] === $_POST['fname']) {
                // echo "remove this item";
                //  unset($_SESSION['myCart'][$key]);
                echo $key;
                print($value['fname']);
                // print($value['fname']);
                // print_r($_SESSION['myCart']);
             }

         }

        //  $_SESSION['myCart'] = array_values($_SESSION['myCart']);
        //  print_r($_SESSION['myCart']);
        //         header('location:viewCart.php');
        
    }
    

    


?>




