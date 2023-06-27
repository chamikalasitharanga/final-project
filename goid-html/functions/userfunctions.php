<?php 
    include('../goid-html/config/connection.php');


    function getAllActive($table){
        global $con;
        $query = "select * from $table where status='active'";
        return $query_run = mysqli_query($con,$query);

    }

?>