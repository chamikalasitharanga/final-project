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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>
                                    <a href="" class="badge bg-danger p-1">
                                        <i class="fa-solid fa-trash">&nbsp;&nbsp;Clear All</i>
                                    </a>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                session_start();
                                $total = 0;
                                if (isset($_SESSION['myCart'])) {
                                    print_r($_SESSION['myCart']);
                                    foreach ($_SESSION['myCart'] as $key=>$value){
                                        echo "$value[price]";
                                        echo "$value[itemqty]";

                                        $total = $value['price'] * $value['itemqty'];
                                        echo "

                                            <form action = '' method = 'POST'>
                                            <tr>
                                                <td>$key</td>
                                                <td></td>
                                                <td><input type='hidden' name='fname' value='$value[fname]'>$value[fname]</td>
                                                <td><input type='hidden' name='price' value='$value[price]'>$value[price]</td>
                                                <td><<input type='hidden' name='itemqty' value='$value[itemqty]'>$value[itemqty]</td>
                                                <td>$total</td>
                                            </tr>
                                            </form>
                                            ";   
                                    }
                                    
                                }
                            ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

    

</body>

</html>