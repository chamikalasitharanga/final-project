<?php
session_start();

if (isset($_SESSION['myCart'])) {

    if(isset($_POST['delete'])){
        unset($_SESSION['myCart']);
    }
     
}


header('Location: category.php');
exit();
?>
