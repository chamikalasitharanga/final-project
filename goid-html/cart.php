<?php
//include_once('../goid-html/functions/userfunctions.php');






    
$_SESSION['myCart']=array();


if (isset($_POST['addCart'])) {
    session_start();
    $fname = $_POST['fname'];
    $price = $_POST['price'];
    $check_product = array_column($_SESSION['myCart'],'fname');
    
    

    if (in_array($fname,$check_product)) {
        echo "
        
            <script>

                alert('Item already added to cart');

            </script>
        ";
    }else {

        

        $_SESSION['myCart'][] = array('fname' => $fname, 'price' => $price);
        header('location:viewCart.php');
    }
    

    
    //print_r($_SESSION['myCart']);

    
}

?>




